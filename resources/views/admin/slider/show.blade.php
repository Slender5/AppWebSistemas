@extends('layouts.administration')

@section('title', 'Show Slider')

@section('content')
<div class="container">

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
          <form method="POST" action="/noticias-admin/{{$slider->slug}}" enctype="multipart/form-data">
              @csrf
              @method('DELETE')
              <button class="btn"><span>Eliminar</span></button>
          </form>
          <a href="/slider/{{$slider->slug}}/editar">
              <button class="btn"><span>Editar</span></button>
          </a>




      </div>


</div>


@endsection
