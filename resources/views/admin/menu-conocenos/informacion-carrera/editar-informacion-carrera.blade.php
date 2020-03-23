@extends('layouts.administrador')

@section('title', 'Editar Información Carrera')

@section('content')

	<!----------------------------------------------------------------- SELECT ---------------------------------------------------------->

	<div class="seccion-principal">

		<div class="contenedor-titulo-seccion-select">

				<h3>Editar Información de la Carrera</h3>

			<div class="contenedor-select-seccion">
						
				<button class="btn-seleccionar">Seleccionar</button>
					<ul>
							
						<li><a href="#">Misión</a></li>
						<li><a href="#">Visión</a></li>
						<li><a href="#">Objetivos</a></li>
					</ul>
					<i></i>
							
			</div>

		</div>

	<!--------------------------------------------------- FORMULARIO - EDITAR INFORMACION DE LA CARRERA ---------------------------------------------------->


		<div class="formulario">
			
			<label for="">Información</label>
			<textarea placeholder="Inserte Información Deseada ... "></textarea>
			
		</div>

		<div class="contenedor-botones">
					
			<button class="btn"><span>Guardar</span></button>
			<button class="btn"><span>Cancelar</span></button>

		</div>


	</div>

@endsection