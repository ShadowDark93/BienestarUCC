<?php

namespace App\Http\Controllers;

use App\Models\Reto;
use App\Models\RetosCumplidos;
use Illuminate\Http\Request;

class RetosCumplidosController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Reto $reto, Request $id)
    {
        $reto = Reto::find($id);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'reto_id' => 'required',
            'reto' => 'required',
        ]);

        $rc = new RetosCumplidos();
        $rc->user_id = Auth()->User()->id;
        $rc->reto_id = $request->get('reto_id');
        $rc->reto = $request->get('reto');
        $rc->cumplido = '1';

        $rc->save();

        return view('retocumplido.create', compact('reto'));

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
