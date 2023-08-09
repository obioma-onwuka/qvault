<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Social;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SocialController extends Controller
{
    
    public function showForm(){

        return view('socials');

    }

    public function save(Request $request){


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

        $formData['code'] = Str::random(4);
        $formData['hits'] = 0;

        if(auth()->check()){

            $formData['expires_at'] = null;
            $formData['user_id'] = auth()->user()->id;

        }else{

            $formData['expires_at'] = 604800;
            $formData['user_id'] = null;

        }

        $formData['qr_code'] = $formData['code'] . '-' . uniqid(). '.svg';
        $baseUrl = route('guest.welcome').'/'.'social/'.$formData['code'];
        $demo_code = Str::random('8');

        $formData['data_code'] = encrypt($demo_code);

        $saveSocial = Social::create($formData);


        if ($saveSocial){

            $qrFile = $formData['qr_code'];
            $code = $formData['code'];

            $nm = $formData['name'];

            QrCode::generate($baseUrl, public_path('/images/qrc/'.$qrFile));

            $shortUrl = route('social.redirect', $code);

            return view('social', compact('shortUrl', 'qrFile', 'nm'))->with('success', 'Note has been created with QR code');

        }else{

            return back()->with('error', 'Something went wrong, try again later');

        }

        

    }

    public function social_url($code){

        $social = Social::where('code', $code)->firstOrFail();

        if (!$social){

            return redirect()->route('social.show_form');

        }

        if( $social->user_id == '' )
        {

            if( isset($social->expires_at) && Carbon::now()->greaterThan($social->expires_at) ){

                return redirect()->route('guest.empty');

            }else{

                // Increment the hit count
                $social->increment('hits');
                                
                return redirect()->route('social.show.social', compact('code'));
            }

        }else{

            // Increment the hit count
            $social->increment('hits');
                                
            return redirect()->route('social.show.social', compact('code'));

        }

    }

    public function show_social($code){

        $social = Social::where('code', $code)->firstOrFail();

        if (!$social){

            return redirect()->route('guest.empty');

        }

        if( $social->user_id == null ){

            if( isset($social->expires_at) && Carbon::now()->greaterThan($social->expires_at) ){

                return redirect()->route('guest.empty');

            }else{

                return view('social-page', compact('social')); 

            }

        }else{

            return view('social-page', compact('social'));

        }

    }

}
