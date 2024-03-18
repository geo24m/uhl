<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom'         => 'required|max:250',
            'email'       => 'required|email',
            'objet'       => 'required',
            'message'     => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 500);
        }
        
        Mail::to('geo24m@gmail.com')->send(new Contact($request));

        //return back()->with('success', 'Votre message à bien été envoyé');

        return response()->json(['success' => 'Vous demande d\'admission a été envoyé']);
    }
}
