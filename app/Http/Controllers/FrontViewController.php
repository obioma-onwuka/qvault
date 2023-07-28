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

}
