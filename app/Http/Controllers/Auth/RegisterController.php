<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Show the registration form
    public function showRegistrationForm() {
        return view('auth.register'); 
    }

    // Handle user registration
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'fname.required' => 'يجب إدخال الاسم الأول.',
            'lname.required' => 'يجب إدخال الاسم الأخير.',
            'username.required' => 'يجب إدخال اسم المستخدم.',
            'email.required' => 'يجب إدخال البريد الإلكتروني.',
            'password.required' => 'يجب إدخال كلمة المرور.',
            'password.min' => 'يجب أن تكون كلمة المرور على الأقل 8 أحرف.',
            'email.unique' => 'البريد الإلكتروني مستخدم بالفعل.',
            'password.confirmed' => 'تأكيد كلمة المرور غير متطابق.'
            
        ]);

        // Create a new user
        User::create([
            'fname' => $validatedData['fname'],
            'lname' => $validatedData['lname'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Redirect to login with a success message
        return redirect()->route('login')->with('success', 'تم إنشاء حسابك بنجاح! يرجى تسجيل الدخول.');

    }
}

