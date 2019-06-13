<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Metas;

class MetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metas = Metas::all();
        return view('Metas/MetasIndex',compact('metas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Metas/MetasCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $metas=new Metas();
        $metas->nombre = $request->get('nombre');
        $metas->descripcion = $request->get('descripcion');
        $metas->costo = $request->get('costo');
        $metas->ahorrado = $request->get('ahorrado');
        $metas->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metas = Metas::find($id);
        return view('Metas.MetasEdit',compact('metas','id'));
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
        $metas=Metas::find($id);
        $metas->nombre = $request->get('nombre');
        $metas->descripcion = $request->get('descripcion');
        $metas->costo = $request->get('costo');
        $metas->ahorrado = $request->get('ahorrado');
        $metas->save();
        return redirect('meta')->with('success', 'La meta ha sido actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $metas = Metas::find($id);
        $metas->delete();
        return redirect('meta')->with('success','La meta ha sido eliminada');
    }
}
