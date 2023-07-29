<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    
    public function welcome(){

        return view ('welcome');

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
