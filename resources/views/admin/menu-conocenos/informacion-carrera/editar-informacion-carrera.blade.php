@extends('layouts.administrador')

@section('title', 'Editar Información Carrera')

@section('content')


	<!----------------------------------------------------------------- SELECT ---------------------------------------------------------->

	<div class="seccion-principal">

		<div class="contenedor-titulo-seccion-select">

				<h3>Editar Información de la Carrera</h3>
						
				<h3>{{$informacion->categoria}}</h3>
									

		</div> 

	<!--------------------------------------------------- FORMULARIO - EDITAR INFORMACION DE LA CARRERA ---------------------------------------------------->


		<form class="form group" method="POST" action="/informacion/{{$informacion->slug}}" enctype="multipart/form-data">

			@method('PUT')
			@csrf

			<div class="formulario">
				
				<label for="">Información</label>
				
				<textarea type="text" name="descripcion">{{$informacion->descripcion}}</textarea> 
				
			</div>

			<div class="contenedor-botones">
					
				<a onclick="return confirm('¿Seguro que desea actualizar?')"><button type="submit" class="btn"><span>Guardar</span></button></a>

				<a onclick="return confirm('¿Desea bandonar sin guardar?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
	
			</div> 
		
		</form>  

		

		

	</div> 

@endsection