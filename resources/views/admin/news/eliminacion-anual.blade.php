@extends('layouts.administration')

@section('title', 'Editar Noticia')

@section('content')

	<!----------------------------------------------------------------- SELECT FECHA ---------------------------------------------------------->

	<div class="seccion-principal">

		<div class="contenedor-titulo-seccion-select">

				<h3>Eliminación de Noticias</h3>

			<div class="contenedor-select-seccion">

					<input type="month">

			</div>

		</div>


		<!----------------------------------------------------------------- NOTICIA N1 ---------------------------------------------------------->

	@foreach ($noticias as $noticia)

		<div class="contenedor-titulo-seccion">

				<h3>{{$noticia->titulo}}</h3>

		</div>

		<div class="contenedor-cuerpo-noticia">

				<div class="contenedor-img-noticia">

					<img src="/images/news/{{$noticia->newimage}}">

				</div>

				<div class="contenedor-texto">

					<p>{{$noticia->redaccion}}</p>

				</div>

		</div>

	@endforeach


	<!------------------------------------------------------------- BOTON ELIMINAR MASIVO ---------------------------------------------------------->

		<div class="contenedor-botones">

			<a><button class="btn"><span>Eliminar</span></button></a>

		</div>

	</div>

@endsection
