@extends('layouts.administration')

@section('title', 'Mostrar Noticia')

@section('content')

<div class="contenedor-noticia">



    <div class="contenedor-titulo-noticia">

        <h3>{{$noticia->titulo}}</h3>

    </div>

    <div class="contenedor-cuerpo-noticia">

        <div class="contenedor-img-noticia">

            <img src="../images/news/{{$noticia->newimage}}">

        </div>

        <div class="contenedor-texto">

            <p> {{$noticia->redaccion}}</p>

        </div>

    </div>

    <div class="contenedor-botones">
        <form method="POST" action="/noticias-admin/{{$noticia->slug}}" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <button class="btn"><span>Eliminar</span></button>
        </form>
        <a href="/noticias-admin/{{$noticia->slug}}/editar">
            <button class="btn"><span>Editar</span></button>
        </a>




    </div>


</div>

@endsection
