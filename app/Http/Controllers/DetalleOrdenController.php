<?php

namespace App\Http\Controllers;

use App\detalleOrden;
use App\usuario;
use App\orden;
use Illuminate\Http\Request;

class DetalleOrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = usuario::all();
        return view('usuario.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\detalleOrden  $detalleOrden
     * @return \Illuminate\Http\Response
     */
    public function show(detalleOrden $detalleOrden)
    {
        $user = orden::findOrFail($id);
        return view('usuario.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detalleOrden  $detalleOrden
     * @return \Illuminate\Http\Response
     */
    public function edit(detalleOrden $detalleOrden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detalleOrden  $detalleOrden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detalleOrden $detalleOrden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detalleOrden  $detalleOrden
     * @return \Illuminate\Http\Response
     */
    public function destroy(detalleOrden $detalleOrden)
    {
        //
    }
}
