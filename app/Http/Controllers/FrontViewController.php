<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\Note;
use App\Models\Social;
use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    
    public function welcome(){

        $getUrls = Url::count();
        $getNotes = Note::count();
        $getSocials = Social::count();
        return view ('welcome', compact('getUrls', 'getNotes', 'getSocials'));

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

    public function empty(){

        return view ('404');

    }

}
