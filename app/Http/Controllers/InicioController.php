<?php

namespace WebSistemas\Http\Controllers;

use WebSistemas\Noticia;
use WebSistemas\Slider;
use Illuminate\Http\Request;
use WebSistemas\Http\Requests\StoreNoticiaRequest;

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
        $sliders = Slider::all();
        $noticias = Noticia::latest()->take(4)->get();


      //  echo $ultimo;
    //notica1 = Noticia::->where('id', $)
        return view('admin.inicio', compact('noticias','sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.news.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
      // $noticia = Noticia::where('slug','=' ,$slug)->firstOrFail();
      //$noticia = Noticia::find($id);

      return view('admin.news.show', compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
      return $noticia;
      //  return View('admin.news.editar',compact('noticia'));
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
    public function destroy(Noticia $noticia){

    $file_path =public_path().'/images/news/'.$noticia->newimage;
       \File::delete($file_path);
      //  $noticia->delete();
        return $file_path;
      //  return 'Eliminado';
    //  return redirect()->route('admin.inicio');

        //
    }
}
