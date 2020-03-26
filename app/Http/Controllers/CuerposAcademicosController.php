<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CuerposAcademico;


class CuerposAcademicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuerpos = CuerposAcademico::all();
        return view('admin.menu-conocenos.cuerpo-academico.view-cuerpo-academico', compact('cuerpos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu-conocenos.cuerpo-academico.agregar-cuerpo-academico');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuerpo = new CuerposAcademico;
        $cuerpo->nombre = $request->input('nombre');
        $cuerpo->grado = $request->input('grado');
        $cuerpo->idCA = $request->input('idCA');
        $cuerpo->clave = $request->input('clave');
        $cuerpo->integrantes = $request->input('integrantes');
        $cuerpo->slug = time().$request->input('nombre');
        $cuerpo->save();

        return redirect()->route('CuerposAcademicos.index')->with('status','Inserción Exitosa');
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
    public function edit(CuerposAcademico $CuerposAcademico)
    {
        return view('admin.menu-conocenos.cuerpo-academico.editar-cuerpo-academico', compact('CuerposAcademico'));
        //return $CuerposAcademico;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CuerposAcademico $CuerposAcademico)
    {
        $CuerposAcademico->fill($request->all());
        $CuerposAcademico->save();

        return redirect()->route('CuerposAcademicos.index')->with('status','Actualización Exitosa');
        //return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CuerposAcademico $CuerposAcademico)
    {
        //return $CuerposAcademico;
        $CuerposAcademico->delete();
        return redirect()->route('CuerposAcademicos.index')->with('status','Eliminación exitosa');
        
        
    }
}
