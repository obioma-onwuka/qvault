<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    
    public function welcome(){

        $getUrls = Url::count();
        return view ('welcome', compact('getUrls'));

    }

    public function showLogin(){

        return view ('login');

    }

    public function showRegister(){

        return view ('register');

    }


    public function login(Request $request){



    }

    public function register(Request $request){


        
    }

}
