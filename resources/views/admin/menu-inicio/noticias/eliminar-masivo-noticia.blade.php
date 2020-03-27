@extends('layouts.administrador')

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

	@foreach ($noticias as $noticia

		<div class="contenedor-titulo-seccion">

				<h3>Joven estudiante se gradua, como maestro pokemon</h3>

		</div>

		<div class="contenedor-cuerpo-noticia">

				<div class="contenedor-img-noticia">

					<img src="img/QRoo.png">
					
				</div>

				<div class="contenedor-texto">

					<p>Jafet ramsel se gradua como maestro pokemon de pueblo paleta al haber capturado al legendario pokemon ossielnorlax, es un acontecimiento impresionante ... </p>
					
				</div>

		</div>

	@endforeach


	<!------------------------------------------------------------- BOTON ELIMINAR MASIVO ---------------------------------------------------------->

		<div class="contenedor-botones">
			<button class="btn"><span>Eliminar</span></button>

		</div>

	</div>

@endsection
