<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    
    public function showForm(){

        return view('socials');

    }

    public function save(Request $request){

        return view('social');

    }

}
