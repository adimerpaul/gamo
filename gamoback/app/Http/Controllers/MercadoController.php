<?php

namespace App\Http\Controllers;

use App\Models\Mercado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MercadoController extends Controller
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
        $pad=str_replace(['-',' '],'',$request->padron);
        //return 'SELECT padron,ubicacion,gest,"E" as tipo from eventual where trim(padron)="'.$pad.'" union SELECT padron,domicilio as ubicacion,gest,"F" as tipo from formales where trim(padron)="'.$pad.'"';
        return DB::select('SELECT padron,ubicacion,gest,"E" as tipo from eventual where trim(padron)="'.$pad.'" union SELECT padron,domicilio as ubicacion,gest,"F" as tipo from formales where trim(padron)="'.$pad.'"');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mercado  $mercado
     * @return \Illuminate\Http\Response
     */
    public function show(Mercado $mercado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mercado  $mercado
     * @return \Illuminate\Http\Response
     */
    public function edit(Mercado $mercado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mercado  $mercado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mercado $mercado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mercado  $mercado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mercado $mercado)
    {
        //
    }
}
