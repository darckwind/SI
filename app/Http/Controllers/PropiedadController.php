<?php

namespace App\Http\Controllers;

use App\propiedad;
use Illuminate\Http\Request;

class PropiedadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propiedad = propiedad::all();
        return view('propiedad.index',compact('propiedad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propiedad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $propiedad = new propiedad();
        $propiedad->rol=$request->input('rol_pro');
        $propiedad->id=$request->input('id');
        $propiedad->direccion=$request->input('inmueble');
        $propiedad->avaluo=$request->input('avaluo');
        $propiedad->tipo=$request->input('tipo_inmueble');
        $propiedad->habitaciones=$request->input('habi');
        if($request->img_casa!=""){
            $propiedad->img_casa = $request->img_casa->store('casa','public');
        }
        if($request->titulo!=""){
            $propiedad->titulo_dominio = $request->titulo->store('titulo','public');
        }
        $propiedad->save();
        return redirect()->route('propiedades.index')
            ->with('success','Propiedad Agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function show(propiedad $propiedad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function edit($propiedad)
    {
        $pro = propiedad::find($propiedad);
        return view('propiedad.edit',compact('pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pro)
    {

        $propiedad = propiedad::find($pro);
        $propiedad->rol=$request->input('rol_pro');

        $propiedad->direccion=$request->input('inmueble');
        $propiedad->avaluo=$request->input('avaluo');
        $propiedad->tipo=$request->input('tipo_inmueble');
        $propiedad->habitaciones=$request->input('habi');
        if($request->img_casa!=""){
            $propiedad->img_casa = $request->img_casa->store('casa','public');
        }
        if($request->titulo!=""){
            $propiedad->titulo_dominio = $request->titulo->store('titulo','public');
        }
        $propiedad->save();
        return redirect()->route('propiedades.index')
            ->with('success','Propiedad Actualizada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function destroy( $propiedad)
    {
        $ss = propiedad::find($propiedad);
        $ss->delete();
        return redirect()->route('propiedades.index')
            ->with('success','Propiedad Eliminada');
    }
}
