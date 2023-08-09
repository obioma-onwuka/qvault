<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\Note;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
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

            return view('user.socials.show', compact('userCheck', ));

        }

    }

    public function social_edit_form(Social $social){



    }

    public function update_social(Request $request, Social $social){



    }

    public function delete_social($social){



    }

    // Social ends here








    public function notes(){

        return view('user.notes.index');

    }


    public function urls(){

        return view('user.urls.index');

    }

}
