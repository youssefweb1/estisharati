<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\OtpReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    // Display email input view
    public function showForgetEmail() { 
        return view('auth.passwords.reset');
     }

    // Generate OTP, send it, and store email in session
    public function sendOtp(Request $request)
    {
        if (!$request->filled('email') || !filter_var($request->email, FILTER_VALIDATE_EMAIL))
            return back()->withErrors(['email' => 'يرجى إدخال بريد إلكتروني صحيح.'])->withInput();
    
        $user = User::where('email', $request->email)->first();
        if (!$user) return back()->withErrors(['email' => 'هذا البريد الإلكتروني غير موجود.'])->withInput();
    
        $firstName = $user->fname;
    
        $otp = rand(100000, 999999);
        OtpReset::updateOrCreate(['user_id' => $user->id], ['otp_code' => $otp, 'otp_expiry' => now()->addMinutes(10)]);
    
        try {
            Mail::to($user->email)->send(new \App\Mail\OtpMail($otp, $firstName)); 
        } catch (\Exception $e) {
            return back()->withErrors(['email' => 'فشل إرسال البريد الإلكتروني: ' . $e->getMessage()]);
        }
    
        session(['email' => $request->email]);
        return redirect()->route('password.otp', ['email' => $request->email]);
    }
    

    // Display OTP form if email exists in session
    public function showOtpForm()
    {
        if (!session('email'))
            return redirect()->route('password.email')->withErrors(['general' => 'يرجى طلب رمز التحقق الجديد.']);

        return view('auth.passwords.otp', ['email' => session('email')]);
    }

    // Verify OTP and redirect to password reset form
    public function verifyOtp(Request $request)
    {
        if (!$request->filled('otp_code') || !is_numeric($request->otp_code) || !$request->filled('email') || !filter_var($request->email, FILTER_VALIDATE_EMAIL))
            return back()->withErrors(['otp_code' => 'يرجى إدخال رمز التحقق بشكل صحيح.']);

        $user = User::where('email', $request->email)->first();
        $otpReset = OtpReset::where('user_id', $user->id)->first();

        if (!$user || !$otpReset || $otpReset->otp_code !== $request->otp_code || now()->greaterThan($otpReset->otp_expiry))
            return back()->withErrors(['otp_code' => 'رمز التحقق غير صحيح أو انتهت صلاحيته.']);

        return redirect()->route('password.form', ['email' => $request->email]);
    }

    // Show password reset form if session email matches
    public function showResetForm($email)
    {
        if (!session('email') || session('email') !== $email)
            return redirect()->route('password.email')->withErrors(['general' => 'يرجى طلب رمز تحقق جديد.']);

        return view('auth.passwords.form', ['email' => $email]);
    }

    // Update password and delete OTP record
    public function updatePassword(Request $request)
    {
        if (!$request->filled('email') || !filter_var($request->email, FILTER_VALIDATE_EMAIL) || !$request->filled('password') || strlen($request->password) < 8 || $request->password !== $request->password_confirmation)
            return back()->withErrors(['password' => 'يرجى إدخال كلمة مرور صحيحة وتأكيدها.']);

        $user = User::where('email', $request->email)->first();
        if (!$user) return back()->withErrors(['email' => 'المستخدم غير موجود.']);

        try {
            $user->update(['password' => Hash::make($request->password)]);
            OtpReset::where('user_id', $user->id)->delete();

            return view('auth.passwords.done');
        } catch (\Exception $e) {
            return back()->withErrors(['general' => 'حدث خطأ أثناء تحديث كلمة المرور، يرجى المحاولة لاحقًا.']);
        }
    }
}
