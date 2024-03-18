<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "";
        return view('admission.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname'         => 'required|max:250',
            'lastname'          => 'required',
            'genre'             => 'required',
            'date_of_birth'     => 'required',
            'place_of_birth'    => 'required',
            'country_of_birth'  => 'required',
            'email'             => 'required|email',
            'address'           => 'required',
            'phone'             => 'required|numeric',
            'avatar'            => 'jpg|png|gif',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 500);
        }
        else{
            return response()->json(['success' => 'success full']);
        }

        var_dump('reussit');
        // $admission = new Admission;
        // $admission->save();

        return response()->json(['success' => 'Vous demande d\'admission a été envoyé']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
