@extends('layouts.administrador')

@section('title', 'Nueva Noticia')

@section('content')


<!----------------------------------------------------------------- CREAR NOTICA  ---------------------------------------------------------->

	<div class="seccion-principal">

		<div class="contenedor-titulo-seccion">

				<h3>Crear Noticias</h3>

		</div>


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

		<div class="formulario">
			
			<label for="">Descripción Noticia</label>
			<textarea placeholder="Inserte Descripción Deseada ... "></textarea>
			
		</div>

		<div class="contenedor-botones">
					
			<button class="btn"><span>Guardar</span></button>
			<button class="btn"><span>Cancelar</span></button>

		</div>

	</div>


@endsection
