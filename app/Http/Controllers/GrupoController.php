<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;

class GrupoController extends Controller
{
    public function __construct()
    {
        /*$this->middleware('auth');
        $this->middleware('log')->only('index');
        $this->middleware('log')->only('index');*/
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Grupo::all();
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
        $grupo = new Grupo();
        $grupo->tamanio_del_drupo = $request["tamanioGrupo"];
        $grupo->nombre_del_grupo = $request["nombreGrupo"];
        $grupo->detalle_del_grupo = $request["detalleGrupo"];
        $grupo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Grupo::find($id);   
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
    public function update(Request $request, $id)
    {
        $grupo = Grupo::find($id);
        $grupo->tamanio_del_grupo = $request["tamanioGrupo"];
        $grupo->nombre_del_grupo = $request["nombreGrupo"];
        $grupo->detalle_del_grupo = $request["detalleGrupo"];
        $grupo->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupo = Grupo::find($id);
        $grupo->delete();
    }
}
