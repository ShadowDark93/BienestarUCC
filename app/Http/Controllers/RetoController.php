<?php

namespace App\Http\Controllers;

use App\Models\Reto;
use Illuminate\Http\Request;

class RetoController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $auth = auth()->user()->tipoPersona;
        $retos = Reto::all();

        if ($auth == 'Admin') {
            //para el admin retorna todos los retos
            $retos = Reto::all();
            return view('retos.index', compact('retos'));
        } else {
            //para el estudiante retorna los retos propios
            return view('retos.index_est', compact('retos'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('retos.create');
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
            'nombre' => 'required',
            'descripcion' => 'required',
            'link' => 'required',
        ]);

        $reto = Reto::create($request->all());

        return redirect()->route('retos.edit', compact('reto'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reto  $reto
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Reto $reto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reto  $reto
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Reto $reto)
    {
        return view('retos.edit', compact('reto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reto  $reto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reto $reto)
    {
        $request->validate([
            'nombre' => "required|unique:retos,nombre,$reto->id",
            'descripcion' => 'required',
            'link' => 'required',
        ]);

        $reto->update($request->all());

        return redirect()->route('retos.edit', $reto)->with('edited', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reto  $reto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reto $reto)
    {
        $reto->delete();
        
        return redirect()->route('retos.index')->with('deleted', 'ok');
    }
}
