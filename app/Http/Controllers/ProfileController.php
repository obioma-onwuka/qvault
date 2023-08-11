<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\Note;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function update_bio(Request $request){

        $userCheck = auth()->user();

        $request->validate([

            'first_name' => ['required', 'min:4', 'max:74', 'string'],
            'last_name' => ['required', 'min:4', 'max:74', 'string'],

        ]);

        $userCheck->first_name = strip_tags($request->first_name);
        $userCheck->last_name = strip_tags($request->last_name);

        $saveData = $userCheck->save();

        if($saveData){

            return redirect()->route('profile.show')->with('success', 'Profile has been updated successfully.');

        }else{

            return back()->with('error', 'Something went wrong, try again later.');

        }

    }

    public function update_pass(Request $request){

        $userCheck = auth()->user();

        $request->validate([
            'current_password' => 'required',
            'new_password' => ['required', 'min:8', 'max:25', 'confirmed'],
            'new_password_confirmation' => 'required'
        ]);

        // Check if the current password matches the user's stored password
        if (!Hash::check($request->current_password, $userCheck->password)) {

            return redirect()->route('profile.settings.show')->with('error', 'The current password is incorrect.');

        }

        // Update the user's password
        $userCheck->password = Hash::make($request->new_password);
        $toChange = $userCheck->save();

        if($toChange){

            return redirect()->route('profile.show')->with('success', 'Password has been updated successfully.');

        }else{

            return back()->with('error', 'Something went wrong, try again later.');

        }

    }

}
