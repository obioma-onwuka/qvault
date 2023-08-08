<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    
    public function dashboard(){

        return view('user.index');

    }


    public function socials(){

        return view('user.socials.index');

    }


    public function notes(){

        return view('user.notes.index');

    }


    public function urls(){

        return view('user.urls.index');

    }

}
