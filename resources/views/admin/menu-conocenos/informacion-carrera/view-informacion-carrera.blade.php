@extends('layouts.administrador')

@section('title', 'Información Carrera')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

	<div class="seccion-principal">
		@foreach($informaciones as $informacion)
	

			<div class="contenedor-titulo-seccion">

					<h3>{{$informacion->categoria}}</h3>

			</div>

			<div class="contenedor-cuerpo-noticia">

					<div class="contenedor-texto-conocenos">

						<p>{{$informacion->descripcion}} </p>
						
					</div>

			</div>

			<div class="contenedor-botones">

			<a href="/informacion/{{$informacion->slug}}/edit">
			<button class="btn"><span>Editar</span></button>
			</a>
			
			</div>
	@endforeach
</div>

@endsection