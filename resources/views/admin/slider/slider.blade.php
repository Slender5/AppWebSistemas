@extends('layouts.administration')

@section('title', 'Editar Noticia')

@section('content')
<div class="container">

</div>

<div class="contenedor-noticia">
  @foreach ($sliders as $slider)


  <div class="contenedor-titulo-noticia">

      <h3>{{$slider->contenido}}</h3>

  </div>

  <div class="contenedor-cuerpo-noticia">

      <div class="contenedor-img-noticia">

        <img src="../images/slider/{{$slider->image}}">

      </div>

      <div class="contenedor-texto">

        <p> </p>

      </div>

  </div>

  <div class="contenedor-botones">
  <a href="/slider/{{$slider->slug}}/editar">
  <button class="btn"  ><span>editar</span></button>
</a>



  </div>

@endforeach
</div>


@endsection
