<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;

class NotesController extends Controller
{
    
    public function showNoteForm(){

        return view('notes');

    }

    public function save(Request $request){

        $formData = $request->validate([

            'title' => ['required', 'string', 'max: 64'],
            'content' => ['required', 'string', 'max:1024']

        ]);

        $formData['title'] = strip_tags(encrypt($formData['title']));
        $formData['content'] = strip_tags(encrypt($formData['content']));
        $formData['code'] = Str::random(4);
        $formData['hits'] = 0;

        if(auth()->check()){

            $formData['expires_at'] = null;
            $formData['user_id'] = auth()->user()->id;
            $formData['otp'] = null;

        }else{

            $formData['expires_at'] = 604800;
            $formData['user_id'] = null;
            $formData['otp'] = null;
        }

        $formData['qr_code'] = $formData['code'] . '-' . uniqid(). '.svg';

        $baseUrl = route('guest.welcome').'/'.'note/'.$formData['code'];

        $saveNote = Note::create($formData);

        if( $saveNote ){

            $qrFile = $formData['qr_code'];
            $code = $formData['code'];
            $title = $formData['title'];

            QrCode::generate($baseUrl, public_path('/images/qrc/'.$qrFile));

            $shortUrl = route('notes.redirect', $code);

            return view('note', compact('shortUrl', 'qrFile', 'title'))->with('success', 'Note has been created with QR code');

        }



    }

    public function note_url($code){

        $note = Note::where('code', $code)->firstOrFail();

        if (!$note){

            return redirect()->route('notes.show_form');

        }
        
        if( $note->user_id == '' )
        {

            if( isset($note->expires_at) && Carbon::now()->greaterThan($note->expires_at) ){

                return redirect()->route('guest.empty');

            }else{

                // Increment the hit count
                $note->increment('hits');
                                
                return redirect()->route('notes.show.note', compact('code'));
            }

        }else{

            // Increment the hit count
            $note->increment('hits');
                                
            return redirect()->route('notes.show.note', compact('code'));

        }

    }

    public function show_note($code){

        $note = Note::where('code', $code)->firstOrFail();

        if (!$note){

            return redirect()->route('guest.empty');

        }

            if( $note->user_id == null ){

                if( isset($note->expires_at) && Carbon::now()->greaterThan($note->expires_at) ){

                    return redirect()->route('guest.empty');

                }else{

                    return view('note-notp', compact('note')); 

                }

            }else{

                return redirect()->route('notes.verify.otp', compact('code'));

            }


    }

    public function verify_note($code){

        $note = Note::where('code', $code)->firstOrFail();

        if (!$note){

            return redirect()->route('guest.empty');

        }else{

            $newOtp = Str::random(6);

            $note->update(['otp' => $newOtp]);

            return view('otp-verify', compact('note')); 

        }

    }

    public function verify(Request $request){

        $formData = $request->validate([

            'otp' => ['required', 'string', 'min:6', 'max:6']

        ]);

        $formData['otp'] = strip_tags($formData['otp']);
        $code = $formData['otp'];

        $note = Note::where('otp', $code)->firstOrFail();

        if (!$note){

            return redirect()->route('guest.empty');

        }else{

            return view('note-otp', compact('note')); 

        }

    }

}
