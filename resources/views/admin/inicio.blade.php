@extends('layouts.administration')

@section('title', 'Principal')


@section('content-slider')

	<!----------------------------------------------------------------- SLIDER ---------------------------------------------------------->



				<!------------------------------------------------------- Slider ---------------------------------------------------->

				<div class="seccion-principal">

					<div class="flexslider">

						<ul class="slides">

							@foreach ($sliders as $slider)


							<li>
								<img src="/images/slider/{{$slider->image}}" alt="">
								<section class="caption">
									<h2>{{$slider->contenido}}</h2>
								</section>
							</li>
						@endforeach


						</ul>
					</div>

					<div class="contenedor-botones">

				<a href="/slider">		<button class="btn"><span>Editar</span></button></a>

					</div>

				</div>




@endsection


@section('content')

	<!----------------------------------------------------------------- NOTICIA N1 ---------------------------------------------------------->


	<div class="seccion-principal">
	@foreach ($noticias as $noticia)
		@if($loop->first)

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

		<button class="btn"><span>Eliminar</span></button>
		<button class="btn"><span>Editar</span></button>


		</div>
	@endif
	@endforeach



<!------------------------------------------------------------- NOTICIAS MÁS ---------------------------------------------------------->


		<div class="contenedor-previsualizar-seccion">

			<div class="contenedor-titulo-seccion">

				<h3>Más Noticias</h3>

			</div>

			@foreach ($noticias as $noticia)
				<div class="contenedor-seccion-preliminar">

					<img src="/images/news/{{$noticia->newimage}}">
					<h2>{{$noticia->titulo}}</h2>

				</div>
			@endforeach



			<div class="contenedor-botones-ver">

		<a href="/noticias-admin">
			<button class="btn centrado">
				<span>Ver Más...</span>
			</button>
		</a>
			</div>

		</div>

	</div>


@endsection
