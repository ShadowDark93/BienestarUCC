<?php

namespace App\Http\Controllers;

use App\Models\RetosCumplidos;
use Illuminate\Http\Request;

class RetosCumplidosController extends Controller
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
    public function create(Reto $reto)
    {
        return view('retocumplido.create', compact('reto'));
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
     * @param  \App\Models\RetosCumplidos  $retosCumplidos
     * @return \Illuminate\Http\Response
     */
    public function show(RetosCumplidos $retosCumplidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RetosCumplidos  $retosCumplidos
     * @return \Illuminate\Http\Response
     */
    public function edit(RetosCumplidos $retosCumplidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RetosCumplidos  $retosCumplidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RetosCumplidos $retosCumplidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RetosCumplidos  $retosCumplidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(RetosCumplidos $retosCumplidos)
    {
        //
    }
}
