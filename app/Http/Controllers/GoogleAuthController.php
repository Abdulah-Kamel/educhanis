<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

use function PHPUnit\Framework\returnSelf;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function redirectToLinkedin()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function callBackGoogle()
    {
        try {

            $google_user = Socialite::driver('google')->user();

            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {

                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'password' => Hash::make($google_user->getName() . '@' . $google_user->getId()),
                ]);

                Auth::login($new_user);

                return redirect()->intended('login');
            } else {
                Auth::login($user);
                return redirect()->intended('login');
            }
        } catch (\Throwable $th) {
            dd('somthin went wrong! ' . $th->getMessage());
        }
    }

    public function callBackFacebook()
    {
        try {

            $facebook_user = Socialite::driver('facebook')->user();

            $user = User::where('facebook_id', $facebook_user->getId())->first();

            if (!$user) {

                $new_user = User::create([
                    'name' => $facebook_user->getName(),
                    'email' => $facebook_user->getEmail(),
                    'facebook_id' => $facebook_user->getId(),
                    'password' => Hash::make($facebook_user->getName() . '@' . $facebook_user->getId()),

                ]);

                Auth::login($new_user);

                return redirect()->intended('login');
            } else {
                Auth::login($user);
                return redirect()->intended('login');
            }
        } catch (\Throwable $th) {
            dd('somthin went wrong! ' . $th->getMessage());
        }
    }

    public function callBackLinkedin()
    {
        try {
            $linkedin_user = Socialite::driver('linkedin')->user();
            $user = User::where('linkedin_id', $linkedin_user->getId())->first();
            if (!$user) {
                $newUser = User::create([
                    'name' => $linkedin_user->getName(),
                    'email' => $linkedin_user->getEmail(),
                    'linkedin_id' => $linkedin_user->getId(),
                    'password' => Hash::make($linkedin_user->getName() . '@' . $linkedin_user->getId()),
                ]);

                Auth::login($newUser);
                return redirect()->intended('login');
            } else {
                Auth::login($user);
                return redirect()->intended('login');
            }
        } catch (\Exception $ex) {
            dd('somthin went wrong! ' . $ex->getMessage());
        }
    }
}
