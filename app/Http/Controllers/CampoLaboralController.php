<?php

namespace App\Http\Controllers;

use App\campo_laboral;
use Illuminate\Http\Request;

class CampoLaboralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campolaboral = campo_laboral::all();

        return view('admin.menu-conocenos.campo-laboral.view-campo-laboral', compact('campolaboral'));
    }

    public function list()
    {
        $campolaboral = campo_laboral::all();

        return view('admin.menu-conocenos.campo-laboral.editar-campo-laboral', compact('campolaboral'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu-conocenos.campo-laboral.crear-campo-laboral');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campolaboral = new campo_laboral();

        $campolaboral->vineta = $request->input('vineta');
        $campolaboral->elemento = $request->input('elemento');
        $campolaboral->slug = time();
        $campolaboral->save();

        return redirect()->route('CampoLaboralLista')->with('status','Registro Exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $campolaboral = campo_laboral::where('slug', '=', $slug)->firstOrFail();

        return $campolaboral;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $campolaboral = campo_laboral::where('slug', '=', $slug)->firstOrFail();

        return view('admin.menu-conocenos.campo-laboral.editar-elemento-campo-laboral', compact('campolaboral'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $campolaboral = campo_laboral::where('slug', '=', $slug)->firstOrFail();

        $campolaboral->vineta = $request->input('vineta');
        $campolaboral->elemento = $request->input('elemento');
        $campolaboral->slug = time();
        $campolaboral->save();

        return redirect()->route('CampoLaboralLista')->with('status','Actualización Exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $campolaboral = campo_laboral::where('slug', '=', $slug)->firstOrFail();

        $campolaboral->delete();

        return redirect()->route('CampoLaboralLista')->with('status','Eliminación Exitosa');
    }
}
