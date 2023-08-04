<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;

class UrlController extends Controller
{
    
    public function showForm(){

        return view('url');

    }

    public function shorten(Request $request){

        $request->validate([
            'url' => ['required', 'url']
        ]);

        $url = $request->input('url');

        // Generate a unique short code
        $code = Str::random(5);
        if(auth()->check()){

            $userID = auth()->user()->id;
            $expires_at = null;

        }else{

            $userID = null;
            $expires_at = 604800;
        }

        $qrCodeFilename = $code . '-' . uniqid(). '.svg';
        $baseUrl = route('guest.welcome').'/'.$code;

        $saveUrl = Url::create([
            'url' => $url,
            'code' => $code,
            'hits' => 0,
            'qr_code' => $qrCodeFilename,
            'expires_at' => $expires_at,
            'user_id' => $userID
        ]);

        if( $saveUrl ){

            QrCode::generate($baseUrl, public_path('/images/qrc/'.$qrCodeFilename));

            $shortUrl = route('url.redirect', $code);

            return view('success', compact('shortUrl', 'qrCodeFilename', 'url'))->with('success', 'URL has been generated with QR code');
            
        }

        
    }

    public function showURL($code){

        $url = Url::where('code', $code)->firstOrFail();

        if (!$url){

            return redirect()->route('url.show_form');

        }

        if( $url->user_id == '' ){

            if( isset($url->expires_at) && Carbon::now()->greaterThan($url->expires_at) ){

                return redirect()->route('guest.empty');

            }else{

                // Increment the hit count
                $url->increment('hits');
                
                return Redirect::away($url->url);

            }

        }else{

            // Increment the hit count
            $url->increment('hits');
                            
            return Redirect::away($url->url);

        }

    }

}
