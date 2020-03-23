@extends('layouts.administrador')

@section('title', 'Editar Reticula')

@section('content')

	<!----------------------------------------------------------------- SELECT ---------------------------------------------------------->

	<div class="seccion-principal">

		<div class="contenedor-titulo-seccion-select">

				<h3>Editar Reticula</h3>

			<div class="contenedor-select-seccion">
						
				<button class="btn-seleccionar">Seleccionar Generación</button>
					<ul>
							
						<li><a href="#">Generación 1</a></li>
						<li><a href="#">Generación 2</a></li>
					</ul>
					<i></i>
							
			</div>

		</div>

		<div class="contenedor-cuerpo-noticia">

			<div class="contenedor-texto-conocenos-reticula">

				<p>INGENIERIA EN SIISTEMAS COMPUTACIONALES
				PLAN:ISIC-2010-224
				ESPECIALIDAD: Tecnologias de la información ISIE-TIN-2016-01
					
			</div>

		</div>

		<div class="contenedor-titulo-seccion">

			<h3>Cargar Archivo</h3>

		</div>

	<!----------------------------------------------------------------- FORMULARIO - CARGAR RETICULA ---------------------------------------------------------->


		<div class="formulario">
			
			<label for="">Titulo</label>
			<input type="text" name="" id="titulo" value="" placeholder="Inserte Titulo Deseado" class="form-control">

		</div>

		<div class="contenedor-cargar-img">

				<div class="contenedor-txt-seccion">
					
					<label for="">Cargar Archivo</label>

				</div>

				<div class="contenedor-boton-cargar">

					<label for="file-upload" class="subir">
						<i class="fas fa-cloud-upload-alt"></i> Subir Archivo
					</label>
						
					<input id="file-upload" onchange='cambiar()' type="file" style='display: none;'/>

					<div class="cargar-doc-pdf">

						<i class="icono fas fa-file-pdf"></i>
						<div id="info-img">No se Eligió Archivo</div>
						
					</div>	
					
				</div>
					
		</div>

		<div class="contenedor-botones">
					
			<button class="btn"><span>Guardar</span></button>

		</div>

		
	</div>


@endsection