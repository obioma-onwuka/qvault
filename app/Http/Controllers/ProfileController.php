<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\Note;
use App\Models\Social;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function profile(){

        $userCheck = auth()->user();

        if(!$userCheck){

            return redirect()->route('guest.logout');

        }else{

            $getNotes = Note::where('user_id', $userCheck->id)->count();
            $getUrls = Url::where('user_id', $userCheck->id)->count();
            $getSocials = Social::where('user_id', $userCheck->id)->count();

            return view('user.profile', compact('userCheck', 'getNotes', 'getUrls', 'getSocials'));

        }

    }

    public function settings_form(){

        $userCheck = auth()->user();

        return view('user.settings', compact('userCheck'));

    }

    public function update_bio(){

        

    }

    public function update_pass(){


        
    }

}
