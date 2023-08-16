<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Url;
use App\Models\Note;
use App\Models\User;
use App\Models\Social;
use App\Mail\WelcomeEmail;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;

class FrontViewController extends Controller
{
    
    public function welcome(){

        $getUrls = Url::count();
        $getNotes = Note::count();
        $getSocials = Social::count();

        $getUsers = User::count();
        return view ('welcome', compact('getUsers', 'getUrls', 'getNotes', 'getSocials'));

    }

    public function tempEmail(){

        return view('layouts.emails.reset-password');

    }

    public function showLogin(){

        return view ('login');

    }

    public function showRegister(){

        return view ('register');

    }


    public function login(Request $request){

        $formData = $request->validate([

            'email' => ['required', 'email', 'min:4'],
            'password' => 'required'

        ]);

        $formData['email'] = strip_tags($formData['email']);
        $formData['password'] = $formData['password'];

        $goLogin = auth()->attempt($formData);

        if($goLogin){

            $request->session()->regenerate();

            return redirect()->route('boarded.panel.index');

        }else{

            return back()->with('error', 'The email or password is incorrect');

        }

    }

    public function register(Request $request){
        $formData = $request->validate([
            'first_name' => ['required', 'min:4', 'max:74', 'string'],
            'last_name' => ['required', 'min:4', 'max:74', 'string'],
            'email' => ['required', 'email', 'min:4', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:25', 'confirmed'],
        ]);

        $formData['first_name'] = strip_tags($formData['first_name']);
        $formData['last_name'] = strip_tags($formData['last_name']);
        $formData['email'] = strip_tags($formData['email']);
        $formData['password'] = bcrypt($formData['password']);

        $formData['activation_code'] = Str::random('24');
        $formData['expires_at'] = 120;

        $user = User::create($formData);

        if ($user) {

            $email = $user->email;

            Mail::to($email)->send(new WelcomeEmail($user, $user->activation_code));

            return redirect()
                ->route('guest.login.show')
                ->with('success', 'You have successfully registered! You can now sign in. An email verification link has also been sent to you.');

        }

        return back()->with('error', 'Something went wrong. Please try again later.');
    }


    public function logout(Request $request){

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('guest.welcome');

    }

    public function verify($activation_code){

        $getCode1 = strip_tags($activation_code);

        $getCode = User::where('activation_code', $activation_code1)->firstOrFail();

        if(!$getCode){

            return redirect()->route('guest.empty');

        }

        if($getCode && Carbon::now()->greaterThan($getCode->expires_at)){

            return redirect()->route('guest.login.show')->with('error', 'The activation link has timed out. Please generate a new one <a href="{{"guest.verify.page"}}">here</a>.');

        }else{

            if($getCode->email_verified_at == null){

                return redirect()->route('guest.login.show')->with('error', 'Your email address has already been activated');

            }else{

                $activated_at = now();

                $getCode->update([

                    'email_verified_at' => $activated_at

                ]);

            }

            return redirect()->route('guest.login.show')->with('success', 'Your email has been activated successfully');

            

        }

    }

    public function resend_activation(Request $request){



    }

    public function resetForm(){

        return view('forgot-password');

    }

    public function reset_pass(Request $request){

        

    }

    public function reset_password($reset_token){

        return view('reset-password', ['reset_token' => '123456']);

    }

    public function empty(){

        return view ('404');

    }

}
