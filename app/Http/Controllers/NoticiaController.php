<?php

namespace WebSistemas\Http\Controllers;
use WebSistemas\Noticia;
use WebSistemas\Http\Requests\StoreNoticiaRequest;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $noticias = Noticia::orderBy('id', 'desc')->paginate(4);
    //      $noticias = Noticia::all();
      //  echo $ultimo;
      //notica1 = Noticia::->where('id', $)
        return view('admin.news.noticias', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //return $request
      $noticia = new Noticia();

      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name2 = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/news/',$name2);
        $noticia->newimage = $name2;
      //  return $name;
    }

    $noticia->titulo = $request->input('titulo');

    $dashSlug= strtolower($request->input('titulo'));

    $dashSlug = str_replace(" ","-",$dashSlug);
    $noticia->slug = $dashSlug;
    $noticia->redaccion = $request->input('redaccion');

    $noticia->save();
      return redirect()->route('noticias-admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)

    {

      //  $noticia =Noticia::find($id);
    //  $noticia =Noticia::where('slug','=',$slug)->firstOrFail();
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
      //  return $noticia;
          return view('admin.news.editar', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Noticia $noticia)
    {
  //  return $request;
    //  if($request->)

      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name2 = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/news/',$name2);
        $file_path =public_path().'/images/news/'.$noticia->newimage;
           \File::delete($file_path);
        $noticia->newimage = $name2;
      //  return $name;
    }
      $noticia->fill($request->all());

      $dashSlug= strtolower($request->input('titulo'));
      $dashSlug = str_replace(" ","-",$dashSlug);
      $noticia->slug = $dashSlug;
      $noticia->save();

    return redirect()->route('noticias-admin.index');
      //  return $noticia;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
      $file_path =public_path().'/images/news/'.$noticia->newimage;
    \File::delete($file_path);
    $noticia->delete();
    return redirect()->route('noticias-admin.index')  ;
    }



    public function buscador(Request $request){
      //return 'Hola mundo';
      //return $request;

    //  $noticias = Noticia::where('titulo', 'like',"%".$request->key."%")->take(10)->get();
        $noticias = Noticia::orderBy('id', 'desc')->where('titulo', 'like',"%".$request->key."%")->take(10)->get();
      return view('admin.news.noticias',compact('noticias'));

    }

    //////Eliminacion anual////////////////
    public function eliminaranual()
    {
      $noticias = Noticia::orderBy('id', 'desc')->paginate(10);
      return view('admin.news.eliminacion-anual',compact('noticias'));
    }

    public function eliminacion(Request $request)
    {

      ///// DELETE from noticias WHERE created_at BETWEEN '2012-01-01' AND '2012-12-31'
      $noticias = Noticias::where('created_at', $fecha)->delete();

      return view('admin.news.eliminacion-anual',compact('noticias'));
    }


}
