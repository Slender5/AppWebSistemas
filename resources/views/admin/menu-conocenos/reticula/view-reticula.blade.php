@extends('layouts.administrador')

@section('title', 'Reticula')

@section('content')

@if(session('status'))
    <div class="contenedor-titulo-seccion">
        <h2>{{session('status')}}</h2>
    </div>
@endif

		<div class="seccion-principal">

<!----------------------------------------------------------------- RETICULA 1 ---------------------------------------------------------->

		@foreach ($reticula as $reticul)

		<div class="contenedor-titulo-seccion">

				<h3>{{$reticul->titulo}}</h3>

		</div>

		<div class="contenedor-cuerpo-noticia">

				<div class="contenedor-texto-conocenos-reticula">

					<p>{{$reticul->programa}}</br>
					PLAN: {{$reticul->plan}}</br>
					ESPECIALIDAD: {{$reticul->especialidad}}</p>
					
				</div>

		</div>

		<div class="contenedor-enlaces">
			
			<a target="_blank" rel="noopener noreferrer" href="/VerReticula/{{$reticul->slug}}">{{$reticul->documento}}</a>

		</div>

		@php
		$var = $reticul->slug
		@endphp

		<div class="contenedor-botones">
			
			<a href="{{route('descargar', ['slug' => $var])}}"><button class="btn"><span>Descargar</span></button></a>

			<a onclick="return confirm('¿Desea modificar esta retícula?')" href="/VerReticula/{{$reticul->slug}}/edit"><button class="btn"><span>Editar</span></button></a>

		</div>

		@endforeach
				
	</div>

@endsection