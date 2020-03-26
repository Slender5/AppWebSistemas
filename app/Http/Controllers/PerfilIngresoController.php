<?php

namespace App\Http\Controllers;

use App\perfil_ingreso;
use Illuminate\Http\Request;

class PerfilIngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfilingreso = perfil_ingreso::all();

        return view('admin.menu-conocenos.perfil-ingreso.view-perfil-ingreso', compact('perfilingreso'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $perfilingreso = perfil_ingreso::all();

        //return $perfilingreso;
        return view('admin.menu-conocenos.perfil-ingreso.editar-perfil-ingreso', compact('perfilingreso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu-conocenos.perfil-ingreso.crear-perfil-ingreso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfilingreso = new perfil_ingreso();
        $perfilingreso->vineta = $request->input('vineta');
        $perfilingreso->elemento = $request->input('elemento');
        $perfilingreso->slug = time();
        $perfilingreso->save();

        return redirect()->route('editar-perfil-ingreso')->with('status','Registro Exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $perfilingreso = perfil_ingreso::where('slug', '=', $slug)->firstOrFail();

        return $perfilingreso;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $perfilingreso = perfil_ingreso::where('slug', '=', $slug)->firstOrFail();

        return view('admin.menu-conocenos.perfil-ingreso.editar-elemento-perfil-ingreso', compact('perfilingreso'));
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
        $perfilingreso = perfil_ingreso::where('slug', '=', $slug)->firstOrFail();
        $perfilingreso->vineta = $request->input('vineta');
        $perfilingreso->elemento = $request->input('elemento');
        $perfilingreso->slug = time();
        $perfilingreso->save();

        return redirect()->route('editar-perfil-ingreso')->with('status','Actualización Exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $perfilingreso = perfil_ingreso::where('slug', '=', $slug)->firstOrFail();
        $perfilingreso->delete();

        return redirect()->route('editar-perfil-ingreso')->with('status','Eliminación Exitosa');
    }
}
