<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;
use App\Http\Requests\SalaStoreRequest;

class SalaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Sala::all();
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
    public function store(SalaStoreRequest $request)
    {
        $sala = new Sala();
        $sala->titulo = $request['titulo'];
        $sala->descripcion = $request['descripcion'];
        $sala->fecha_inicio = $request['fecha_inicio'];
        $sala->hora_inicio = $request['hora_inicio'];
        $sala->fecha_fin = $request['fecha_fin'];
        $sala->hora_fin = $request['hora_fin'];
        $sala->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Sala::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalaStoreRequest $request, $id)
    {
        $sala = Sala::find($id);
        $sala->titulo = $request['titulo'];
        $sala->descripcion = $request['descripcion'];
        $sala->fecha_inicio = $request['fecha_inicio'];
        $sala->hora_inicio = $request['hora_inicio'];
        $sala->fecha_fin = $request['fecha_fin'];
        $sala->hora_fin = $request['hora_fin'];
        $sala->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sala = Sala::find($id);
        $sala->delete();
    }
}
