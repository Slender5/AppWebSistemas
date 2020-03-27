@extends('layouts.administrador')

@section('title', 'Editar Elemento Perfil Ingreso')

@section('content')

	<!--------------------------------------------------------------- CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

	  <div class="seccion-principal">
	    
	      <div class="contenedor-titulo-seccion">

	        <h3>Actualizar Datos</h3>

	    </div>

	    <form class="form-group" method="POST" action="/PerfilIngreso/{{$perfilingreso->slug}}">
	    @method('PUT')
	    @csrf

		    <div class="formulario"> 
		      
		          <label for="">Viñeta</label>
		          <input type="text" name="vineta" id ="viñeta" value="{{$perfilingreso->vineta}}" placeholder="Inserte Viñeta" class="form-control" required>
		    </div>

		    <div class="formulario"> 
		          <label for="">Información</label>
		          <input type="text" name="elemento" id ="informacion-perfil" value="{{$perfilingreso->elemento}}" placeholder="Ingrese Información Deseada" class="form-control" required>
		    </div>

		    <div class="contenedor-botones">
		                
		        <a onclick="return confirm('¿Desea guardar los cambios?')"><button class="btn" type="submit"><span>Guardar</span></button></a>
		        
		    </div>

		</form>

	    <a onclick="return confirm('¿Desea cancelar los cambios realizados?')" href="{{route('editar-perfil-ingreso')}}"><button class="btn"><span>Cancelar</span></button></a>

	  </div>

@endsection