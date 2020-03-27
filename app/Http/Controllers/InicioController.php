<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use WebSistemas\Noticia;
<<<<<<< HEAD
use WebSistemas\Slider;
=======
>>>>>>> parent of 82d1e56... Subida index
=======
>>>>>>> parent of 8c67513... Inicio index
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
<<<<<<< HEAD
<<<<<<< HEAD
        $sliders = Slider::all();
=======
>>>>>>> parent of 8c67513... Inicio index
        $noticias = Noticia::latest()->take(4)->get();


      //  echo $ultimo;
    //notica1 = Noticia::->where('id', $)
<<<<<<< HEAD
        return view('admin.inicio', compact('noticias','sliders'));
=======
        return view('admin/inicio');
>>>>>>> parent of 82d1e56... Subida index
=======
        return view('admin.inicio', compact('noticias'));
>>>>>>> parent of 8c67513... Inicio index
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
