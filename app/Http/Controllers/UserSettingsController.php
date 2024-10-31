<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserSettingsController extends Controller
{
    // Display the password change form
    public function showChangePasswordForm()
    {
        return Auth::check() ? view('settings.change_password') : $this->showLoginMessage();
    }

    // Update the user's password
    public function updatePassword(Request $request)
    {
        if (!Auth::check()) {
            return $this->showLoginMessage();
        }

        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ], [
            'current_password.required' => 'يرجى إدخال كلمة المرور الحالية.',
            'new_password.required' => 'يرجى إدخال كلمة المرور الجديدة.',
            'new_password.min' => 'يجب أن تحتوي كلمة المرور الجديدة على 8 أحرف على الأقل.',
            'new_password.confirmed' => 'تأكيد كلمة المرور لا يتطابق مع كلمة المرور الجديدة.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return back()->withErrors(['current_password' => 'كلمة المرور الحالية غير صحيحة.']);
        }

        auth()->user()->update(['password' => Hash::make($request->new_password)]);

        return back()->with('success', 'تم تحديث كلمة المرور بنجاح.');
    }

    // Show the user's account information
    public function showAccount(Request $request)
    {
        if (!Auth::check()) {
            return $this->showLoginMessage();
        }

        return view('settings.account', ['user' => $request->user()]);
    }

    // Update the user's account information
    public function updateAccount(Request $request)
    {
        if (!Auth::check()) {
            return $this->showLoginMessage();
        }

        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . auth()->id(),
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
        ], [
            'current_password.required' => 'يرجى إدخال كلمة المرور الحالي.',
            'fname.required' => 'يرجى إدخال الاسم الأول.',
            'lname.required' => 'يرجى إدخال الاسم الأخير.',
            'username.required' => 'يرجى إدخال اسم المستخدم.',
            'email.required' => 'يرجى إدخال البريد الإلكتروني.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (!Auth::attempt(['email' => auth()->user()->email, 'password' => $request->current_password])) {
            return back()->withErrors(['current_password' => 'كلمة المرور الحالية غير صحيحة.']);
        }

        auth()->user()->update($request->only('fname', 'lname', 'username', 'email'));

        return back()->with('success', 'تم تحديث معلومات الحساب بنجاح.');
    }

    // Display the image change form
    public function showImage()
    {
        return Auth::check() ? view('settings.change_image') : $this->showLoginMessage();
    }

    // Update the user's profile image
    public function updateImage(Request $request)
    {
        if (!Auth::check()) {
            return $this->showLoginMessage();
        }

        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'image.required' => 'يرجى رفع صورة.',
            'image.image' => 'يجب أن تكون الصورة من نوع صورة.',
            'image.mimes' => 'يجب أن تكون الصورة من نوع jpeg, png, jpg، أو gif.',
            'image.max' => 'يجب ألا يتجاوز حجم الصورة 2 ميجابايت.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            $user = auth()->user();

            if ($user->image) {
                Storage::delete('public/profile_images/' . $user->image);
            }

            $originalName = $request->file('image')->getClientOriginalName();
            $uniqueName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . time() . '.' . $request->file('image')->getClientOriginalExtension();

            $path = $request->file('image')->storeAs('profile_images', $uniqueName, 'public');

            $user->image = $uniqueName;
            $user->save(); 

            return back()->with('success', 'تم تحديث الصورة بنجاح.');
        } catch (\Exception $e) {
            return back()->withErrors(['image' => 'حدث خطأ أثناء رفع الصورة: ' . $e->getMessage()])->withInput();
        }
    }

    // Delete the user's account
    public function deleteAccount(Request $request)
    {
        if (!Auth::check()) {
            return $this->showLoginMessage();
        }

        $request->validate(['current_password' => 'required']);

        if (!Auth::attempt(['email' => auth()->user()->email, 'password' => $request->current_password])) {
            return back()->withErrors(['current_password' => 'كلمة المرور الحالية غير صحيحة.']);
        }

        auth()->user()->delete();

        return redirect('/')->with('success', 'تم حذف الحساب بنجاح.');
    }

    // Function to show login message
    protected function showLoginMessage()
    {
        return view('message')->with('message', 'يجب عليك تسجيل الدخول للوصول إلى هذه الصفحة.');
    }
}
