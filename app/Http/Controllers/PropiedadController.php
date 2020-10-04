<?php

namespace App\Http\Controllers;

use App\propiedad;
use Illuminate\Http\Request;

class PropiedadController extends Controller
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
    public function edit(propiedad $propiedad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, propiedad $propiedad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\propiedad  $propiedad
     * @return \Illuminate\Http\Response
     */
    public function destroy(propiedad $propiedad)
    {
        //
    }
}
