@extends('layouts.administrador')

@section('title', 'Principal')


@section('content-slider')

	<!----------------------------------------------------------------- SLIDER ---------------------------------------------------------->

			<div class="contenedor-slider">

				<!------------------------------------------------------- Slider ---------------------------------------------------->
					
				<div class="seccion-principal">

					<div class="flexslider">

						<ul class="slides">

							<li>
								<img src="img/1.jpg" alt="">
								<section class="caption">
									<h2>joven estudiante se gradua, como maestro pokemon</h2>
								</section>
							</li>

							<li>
								<img src="img/2.jpg" alt="">
								<section class="caption">
									<h2>Jafet ramsel se gradua como maestro pokemon de pueblo paleta al haber capturado al legendario pokemon ossielnorlax, es un acontecimiento impresionante</h2>
								</section>
							</li>

							<li>
								<img src="img/3.jpg" alt="">
								<section class="caption">
									<h2>joven estudiante se gradua, como maestro pokemon</h2>
								</section>
							</li>

							<li>
								<img src="img/2.jpg" alt="">
								<section class="caption">
									<h2>joven estudiante se gradua, como maestro pokemon</h2>
								</section>
							</li>

						</ul>
					</div>

					<div class="contenedor-botones">

						<button class="btn"><span>Editar</span></button>

					</div>

				</div>


			</div>

@endsection


@section('content')

	<!----------------------------------------------------------------- NOTICIA N1 ---------------------------------------------------------->

	<div class="seccion-principal">

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

		<div class="contenedor-botones">

		<button class="btn"><span>Eliminar</span></button>
		<button class="btn"><span>Editar</span></button>


		</div>

		
	

<!------------------------------------------------------------- NOTICIAS MÁS ---------------------------------------------------------->


		<div class="contenedor-previsualizar-seccion">

			<div class="contenedor-titulo-seccion">

				<h3>Más Noticias</h3>

			</div>
			
			<div class="contenedor-seccion-preliminar">

				<img src="img/sistemas.png">
				<h2>Joven Ve Nopor en Salon de Clases</h2>
				
			</div>

			<div class="contenedor-seccion-preliminar">

				<img src="img/sistemas.png">
				<h2>Joven Ve Nopor en Salon de Clases</h2>
				
			</div>

			<div class="contenedor-seccion-preliminar">

				<img src="img/sistemas.png">
				<h2>Joven Ve Nopor en Salon de Clases</h2>
				
			</div>

			<div class="contenedor-seccion-preliminar">

				<img src="img/sistemas.png">
				<h2>Joven Ve Nopor en Salon de Clases</h2>
				
			</div>

			<div class="contenedor-botones-ver">

			<button class="btn centrado"><span>Ver Más...</span></button>


			</div>

		</div>
		
	</div>

@endsection