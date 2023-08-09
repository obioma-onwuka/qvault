<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\Note;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;

class PanelController extends Controller
{
    
    public function dashboard(){

        $userCheck = auth()->user();
        
        $getNote = Note::where('user_id', $userCheck->id)->count();
        $getUrl = Url::where('user_id', $userCheck->id)->count();
        $getSocial = Social::where('user_id', $userCheck->id)->count();
        
        return view('user.index', compact('getNote', 'userCheck', 'getUrl', 'getSocial'));

    }





    // Social Starts here
    public function socials(){

        $userCheck = auth()->user();
        $socials = [];

        $socialss = Social::where('user_id', $userCheck->id)->latest()->get();
        $perPage = 3;
        $currentPage = Paginator::resolveCurrentPage();
        $currentItems = $socialss->slice(($currentPage - 1) * $perPage, $perPage);

        $socials = new LengthAwarePaginator($currentItems, $socialss->count(), $perPage, $currentPage, [

            'path' => request()->url(),
            'query' => request()->query()

        ]);
        
        $serialNumbers = $socials->firstItem();


        return view('user.socials.index', compact('socials', 'serialNumbers', 'userCheck'));

    }

    public function show_social(Social $social){

        $userCheck = auth()->user();

        if($userCheck->id != $social->user_id){

            return redirect()->route('guest.logout');

        }else{

            return view('user.socials.show', compact('userCheck', 'social'));

        }

    }

    public function social_edit_form(Social $social){

        $userCheck = auth()->user();

        if($userCheck->id != $social->user_id){

            return redirect()->route('guest.logout');

        }else{

            return view('user.socials.edit', compact('userCheck', 'social'));

        }

    }

    public function update_social(Request $request, Social $social){

        $userCheck = auth()->user();

        if($userCheck->id != $social->user_id){

            return redirect()->route('guest.logout');

        }else{

            $formData = $request->validate([

                'name' => ['required', 'string', 'min: 5', 'max: 64'],
                'facebook_handle' => ['required', 'string', 'min: 5', 'max: 256'],
                'twitter_handle' => ['required', 'string', 'min:5', 'max:256'],
                'instagram_handle' => ['required', 'string', 'min:5', 'max:256'],
                'phone_number' => ['required', 'string', 'min:5', 'max:11'],
                'email' => ['required', 'email', 'min:5', 'max:256']
    
            ]);

            $formData['name'] = strip_tags(strip_tags($formData['name']));
            $formData['facebook_handle'] = strip_tags($formData['facebook_handle']);
            $formData['twitter_handle'] = strip_tags($formData['twitter_handle']);
            $formData['instagram_handle'] = strip_tags($formData['instagram_handle']);
            $formData['phone_number'] = strip_tags($formData['phone_number']);
            $formData['email'] = strip_tags($formData['email']);

            $saveData = $social->update($formData);

            if($saveData){

                return redirect()->route('boarded.social.show', compact('userCheck', 'social'))->with('success', 'The social profile has been updated successfully.');

            }else{

                return back()->with('error', 'Something went wrong, try again later.');

            }

        }

    }

    public function delete_social(Social $social, Request $request){

        $userCheck = auth()->user();

        if($userCheck->id != $social->user_id){

            return redirect()->route('guest.logout');

        }else{

            $socialQrc = $social->qr_code;
            $socialFilePath = public_path('/images/qrc/') . $socialQrc;

            $proOut = $social->delete();

            if($proOut){

                if (File::exists($socialFilePath)) {

                    File::delete($socialFilePath);
    
                }

                return redirect()->route('boarded.socials.index')->with('success', 'The social profile has been deleted successfully.');

            }

        }

    }

    // Social ends here








    public function notes(){

        return view('user.notes.index');

    }


    public function urls(){

        return view('user.urls.index');

    }

}
