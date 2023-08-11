<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\Note;
use App\Models\User;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FrontViewController extends Controller
{
    
    public function welcome(){

        $getUrls = Url::count();
        $getNotes = Note::count();
        $getSocials = Social::count();

        $getUsers = User::count();
        return view ('welcome', compact('getUsers', 'getUrls', 'getNotes', 'getSocials'));

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
            'password_confirmation' => 'required'

        ]);

        $formData['first_name'] = strip_tags($formData['first_name']);
        $formData['last_name'] = strip_tags($formData['last_name']);
        $formData['email'] = strip_tags($formData['email']);
        $formData['password'] = bcrypt($formData['password']);

        $saveData = User::create($formData);

        if($saveData){

            return redirect()->route('guest.login.show')->with('success', 'You have successfully registered, please ensure to verify your email address.');


        }else{

            return back()->with('error', 'Something went wrong, try again later.');

        }
        
    }

    public function logout(Request $request){

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('guest.welcome');

    }

    public function empty(){

        return view ('404');

    }

}
