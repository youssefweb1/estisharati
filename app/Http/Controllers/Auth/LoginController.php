<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    // Display login form
    public function showLoginForm() { 
        return view('auth.login'); 
    }

    // Handle login attempt
    public function login(Request $request)
    {
        $credentials = $this->validateCredentials($request);
        $field = filter_var($credentials['username_or_email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        return Auth::attempt([$field => $credentials['username_or_email'], 'password' => $credentials['password']])
            ? redirect()->route('home')
            : $this->failedLoginResponse($field, $credentials['username_or_email']);
    }

    // Validate login credentials
    private function validateCredentials(Request $request)
    {
        return $request->validate([
            'username_or_email' => 'required',
            'password' => 'required'
        ], [
            'username_or_email.required' => 'يرجى إدخال اسم المستخدم أو البريد الإلكتروني.',
            'password.required' => 'يرجى إدخال كلمة المرور.',
           
        ]);
    }

    // Handle failed login response
    private function failedLoginResponse($field, $usernameOrEmail)
    {
        $errorKey = User::where($field, $usernameOrEmail)->exists() ? 'password' : 'username_or_email';
        $errorMsg = $errorKey === 'password' ? 'كلمة المرور غير صحيحة.' : 'اسم المستخدم أو البريد الإلكتروني غير موجود.';

        return back()->withErrors([$errorKey => $errorMsg])->withInput();
    }

    // Handle logout
    public function logout() { 
        Auth::logout(); return redirect('/login');
    }
}
