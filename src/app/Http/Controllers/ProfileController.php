<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       
        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        
        return view('profile.edit')->with('user', Auth::user());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' =>'min:4|string|max:255',
            'telefon' =>'numeric',
            'postal' =>'integer',
            'hazszam' =>'integer',
        ], [
            'telefon.numeric' => 'A telefonszám csak számokat tartalmazhat.',
            'postal.integer' => 'Az irányítószám csak számokat tartalmazhat.',
            'hazszam.integer' => 'A házszám csak számokat tartalmazhat.',
        ]);

        
        
        $user = Auth::user();
        $user->name = $request['name'];
        $user->telefon = $request['telefon'];
        $user->postal = $request['postal'];
        $user->varos = $request['varos'];
        $user->utca = $request['utca'];
        $user->hazszam = $request['hazszam'];
        $user->save();
        return redirect('profile-dashboard')->withErrors(['Sikeresen módosította a profilját!']);
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

    public function upload(Request $request)
    {
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images/'.auth()->user()->id.'/','profile-pic.jpg','public');
            $source = auth()->user()->id."/"."profile-pic.jpg";
            Auth()->user()->update(['image'=>$source]);
        }
        return redirect()->back();
    }

}
