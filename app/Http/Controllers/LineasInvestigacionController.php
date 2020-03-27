<?php

namespace App\Http\Controllers;

use App\lineas_investigacion;
use Illuminate\Http\Request;

class LineasInvestigacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lineainvestigacion = lineas_investigacion::all();

        return view('admin.menu-conocenos.lineas-investigacion.view-lineas', compact('lineainvestigacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu-conocenos.lineas-investigacion.agregar-elemento-lineas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lineainvestigacion = new lineas_investigacion();

        $lineainvestigacion->programa = $request->input('programa');
        $lineainvestigacion->linea = $request->input('linea');
        $lineainvestigacion->clave = $request->input('clave');
        $lineainvestigacion->slug = time();
        $lineainvestigacion->save();

        return redirect()->route('LineasInvestigacion')->with('status','Registro Exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $lineainvestigacion = lineas_investigacion::where('slug', '=', $slug)->firstOrFail();

        return $lineainvestigacion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $lineainvestigacion = lineas_investigacion::where('slug', '=', $slug)->firstOrFail();

        return view('admin.menu-conocenos.lineas-investigacion.editar-elemento-lineas', compact('lineainvestigacion'));
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
        $lineainvestigacion = lineas_investigacion::where('slug', '=', $slug)->firstOrFail();

        $lineainvestigacion->programa = $request->input('programa');
        $lineainvestigacion->linea = $request->input('linea');
        $lineainvestigacion->clave = $request->input('clave');
        $lineainvestigacion->slug = time();
        $lineainvestigacion->save();

        return redirect()->route('LineasInvestigacion')->with('status','Actualización Exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $lineainvestigacion = lineas_investigacion::where('slug', '=', $slug)->firstOrFail();
        
        $lineainvestigacion->delete();

        return redirect()->route('LineasInvestigacion')->with('status','Eliminación Exitosa');
    }
}
