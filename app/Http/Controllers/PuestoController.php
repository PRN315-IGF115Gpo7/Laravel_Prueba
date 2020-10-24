<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

/**
 * Fecha de Modificacion: 23-oct-2020
 * Autor: RA17073
 */

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Puesto::all();
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
        $puesto = new Puesto();
        $puesto->titulo=$request['titulo'];
        $puesto->descripcion=$request['descripcion'];
        $puesto->salario=$request['salario'];
        $puesto->save();
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function show(Puesto $puesto)
    {
        return Puesto::find($puesto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function edit(Puesto $puesto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $puesto)
    {
        $puesto = Puesto::find($puesto);
        $sala->titulo = $request['titulo'];
        $sala->descripcion = $request['descripcion'];
        $sala->salario = $request['salario'];
        $sala->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Puesto  $puesto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puesto $puesto)
    {
        $puesto = Puesto::find($puesto);
        $puesto->delete();
    }
}
