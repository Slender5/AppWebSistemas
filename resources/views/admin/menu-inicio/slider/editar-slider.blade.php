@extends('layouts.administrador')

@section('title', 'Editar Slider')


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

				</div>


			</div>

@endsection


@section('content')

	<!----------------------------------------------------------------- SELECT ---------------------------------------------------------->

	<div class="seccion-principal">

		<div class="contenedor-titulo-seccion-select">

				<h3>Editar elementos del Slider</h3>

			<div class="contenedor-select-seccion">
						
				<button class="btn-seleccionar">Seleccionar IMG</button>
					<ul>
							
						<li><a href="#">Imagen 1</a></li>
						<li><a href="#">Imagen 2</a></li>
						<li><a href="#">Imagen 3</a></li>
						<li><a href="#">Imagen 4</a></li>
					</ul>
					<i></i>
							
			</div>

		</div>

	<!----------------------------------------------------------------- FORMULARIO - CARGAR IMG ---------------------------------------------------------->


		<div class="formulario">
			
			<label for="">Titulo</label>
			<input type="text" name="" id="titulo" value="" placeholder="Inserte Titulo Deseado" class="form-control">

		</div>

		<div class="contenedor-cargar-img">

				<div class="contenedor-txt-seccion">
					
					<label for="">Cargar IMG</label>

				</div>

				<div class="contenedor-boton-cargar">

					<label for="file-upload" class="subir">
						<i class="fas fa-cloud-upload-alt"></i> Subir Archivo
					</label>
						
					<input id="file-upload" onchange='cambiar()' type="file" style='display: none;'/>

					<div id="info-img">No se Eligió Archivo</div>
					
					
				</div>
					

				<div class="contenedor-img-seccion">
					
					<img src="Img/sistemas.png">

				</div>
					

		</div>

		<div class="contenedor-botones">
					
			<button class="btn"><span>Guardar</span></button>

		</div>

		
	

<!------------------------------------------------------------- PREVISUALIZACIÓN ---------------------------------------------------------->


		<div class="contenedor-previsualizar-seccion">

			<div class="contenedor-titulo-seccion">

				<h3>Previsualización</h3>

			</div>
			
			<div class="contenedor-seccion-preliminar">

				<img src="Img/sistemas.png">
				<h2>IMG 1</h2>
				
			</div>

			<div class="contenedor-seccion-preliminar">

				<img src="Img/sistemas.png">
				<h2>IMG 2</h2>
				
			</div>

			<div class="contenedor-seccion-preliminar">

				<img src="Img/sistemas.png">
				<h2>IMG 3</h2>
				
			</div>

			<div class="contenedor-seccion-preliminar">

				<img src="Img/sistemas.png">
				<h2>IMG 4</h2>
				
			</div>

			
		</div>

	</div>

@endsection