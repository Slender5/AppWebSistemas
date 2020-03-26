@extends('layouts.administration')

@section('title', 'Noticias')


@section('content')

<!----------------------------------------------------------------- BUSCADOR ---------------------------------------------------------->

	<div class="seccion-principal">

		<div class="contenedor-boton-CE">

		<a href="/eliminacion-anual/">	<button class="btn"><span>Eliminación Anual</span></button></a>
		<a href="/noticias-admin/nueva">	<button class="btn"><span>Agregar Noticia</span></button></a>


		</div>

		<div class="contenedor-buscador-noticia">

			<div class="buscador">

        <form  files = "true" method="GET" action="/buscador-noticias/" enctype="multipart/form-data">
          @csrf
						<input type="search" name="key" placeholder="Noticia">

            <button type="submit" class="btn-buscar"><span><i class="icono izquierda fas fa-search"></i></span></button>

				</form>


			</div>

		</div>

<!----------------------------------------------------------------- NOTICIA---------------------------------------------------------->

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

		<div class="contenedor-botones">
      <form method="POST" action="/noticias-admin/{{$noticia->slug}}" enctype="multipart/form-data">
        @method('DELETE')
        @csrf
		<button type="submit" class="btn"><span>Eliminar</span></button>
  </form>
	  <a href="/noticias-admin/{{$noticia->slug}}/editar">	<button class="btn"><span>Editar</span></button></a>


		</div>

	@endforeach

	</div>

@endsection
