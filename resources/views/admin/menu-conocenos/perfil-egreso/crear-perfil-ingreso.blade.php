@extends('layouts.administrador')

@section('title', 'Nuevo Elmento Perfil Egreso')

@section('content')

	<!--------------------------------------------------------------- CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

	  <div class="seccion-principal">
	    
	      <div class="contenedor-titulo-seccion">

	        <h3>Agregar Datos</h3>

	    </div>

	    <form class="form-group" method="POST" action="/PerfilEgreso">
	    	@csrf

		    <div class="formulario"> 
		      
		          <label for="">Viñeta</label>
		          <input type="text" name="vineta" id ="viñeta" value="" placeholder="Inserte Viñeta" class="form-control" required>
		    </div>

		    <div class="formulario"> 
		          <label for="">Información</label>
		          <input type="text" name="elemento" id ="informacion-perfil" value="" placeholder="Ingrese Información Deseada" class="form-control" required>
		    </div>

		    <div class="contenedor-botones">
		                
		        <a onclick="return confirm('¿Desea guardar el nuevo elemento?')"><button class="btn" type="submit"><span>Guardar</span></button></a>

		    </div>

		</form>

		<a onclick="return confirm('¿Desea cancelar el nuevo elemento?')" href="{{route('editar-perfil-egreso')}}"><button class="btn"><span>Cancelar</span></button></a>

	  </div>

@endsection