<?php

namespace App\Http\Controllers;

use App\Models\Economica;
use Illuminate\Http\Request;

class EconomicaController extends Controller
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
        return DB::SELECT('SELECT npadron as padron,nactdescri as descrip,ndiract as direccion,gest,"N" as tip from natur where npadron = "'.$request->padron.'" union Select jpadron as padron,j.actdescri as descrip,jdiractiv as direccion,gest, "J" as tip from jurid where jpadron="'.$request->padron.'"');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Economica  $economica
     * @return \Illuminate\Http\Response
     */
    public function show(Economica $economica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Economica  $economica
     * @return \Illuminate\Http\Response
     */
    public function edit(Economica $economica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Economica  $economica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Economica $economica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Economica  $economica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Economica $economica)
    {
        //
    }
}
