<?php

namespace WebSistemas\Http\Controllers;
use WebSistemas\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.slider', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $sliders = Slider::all();

        return view('admin.slider.crear',compact('sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $slider = new Slider();

      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name2 = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/slider/',$name2);
      //  return $name;
    }

    $slider->contenido = $request->input('contenido');
    $slider->image = $name2;
    $dashSlug= strtolower($request->input('contenido'));
    $dashSlug = str_replace(" ","-",$dashSlug);

    $slider->slug = $dashSlug;

    $slider->save();
      return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
      return view('admin.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {

        $slidersG = Slider::all();
    //    $ids  = DB::table('sliders')->select('id')->get();
    //  return $slider;
        return view('admin.slider.editar2', compact('slidersG','slider' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
    //   return $request;

      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $name2 = time().$file->getClientOriginalName();
        $file->move(public_path().'/images/slider/',$name2);
        $file_path =public_path().'/images/slider/'.$slider->image;
           \File::delete($file_path);
        $slider->image = $name2;

    // return $name2;
    }

      $slider->contenido =$request->input('contenido');
      $dashSlug= strtolower($request->input('contenido'));
      $dashSlug = str_replace(" ","-",$dashSlug);
      //return $dashSlug;
    //  return $dashSlug;
      $slider->slug = $dashSlug;
      $slider->save();

    return redirect()->route('slider.index');
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
