<?php

namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SocialLoginController extends Controller
{
    // Redirect to social provider
    public function redirectToProvider($provider) {
        return Socialite::driver($provider)->redirect();
    }

    // Handle provider callback and user login
    public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
            $user = User::firstOrCreate(
                ['email' => $socialUser->getEmail()],
                [
                    'username' => $socialUser->getName(),
                    'fname' => $socialUser->getName(),
                    'lname' => $socialUser->getName(),
                    'password' => bcrypt('social-login-default-password')
                ]
            );

            Auth::login($user);
            return redirect()->route('home');
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors(['error' => "فشلت عملية تسجيل الدخول باستخدام $provider"]);
        }
    }
}
