<?php

namespace App\Http\Controllers;

use App\Models\Mercado;
use Illuminate\Http\Request;

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
        if(DB::select('SELECT * from eventual where padron='+str_replace('-','',$request->padron))->exists())
            return DB::select('SELECT * from eventual where padron='+str_replace('-','',$request->padron));
        else
            return DB::select('SELECT * from formales where padron='+str_replace('-','',$request->padron));
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
