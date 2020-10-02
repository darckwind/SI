<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ClinteController extends Controller
{

    public function __construct()
    {
        //autentifica que el usuario este loguiado (evita el user guest)
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
     * @param  \App\Clinte  $clinte
     * @return \Illuminate\Http\Response
     */
    public function show(Clinte $clinte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clinte  $clinte
     * @return \Illuminate\Http\Response
     */
    public function edit($clinte)
    {
        $user = User::find($clinte);
        return view('cliente.update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clinte  $clinte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $user= User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->sex= $request->input('sex');
        $user->lastname=$request->input("lastname");
        $user->run=$request->input("run");
        $user->est_civil=$request->input("est_civil");
        $user->cel_phone=$request->input("cel-phone");
        $user->phone=$request->input("phone");
        $user->adress=$request->input("adress");
        $user->state=$request->input("state");

        if ($request->input('password')==null){
            $user->save();
        }else{
            $user->password = Hash::make($request->input('password'));
        }

        return redirect()->route('home')->with('success','Datos personales actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clinte  $clinte
     * @return \Illuminate\Http\Response
     */
    public function destroy($clinte)
    {
        $user = User::find($clinte);
        $user->delete();
        return redirect()->route('login');
    }
}
