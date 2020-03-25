@extends('layouts.administrador')

@section('title', 'Editar Elemento Perfil Ingreso')

@section('content')

	<!--------------------------------------------------------------- CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

	  <div class="seccion-principal">
	    
	      <div class="contenedor-titulo-seccion">

	        <h3>Actualizar Datos</h3>

	    </div>

	    <form class="form-group" method="POST" action="/NuevoElemento/{{$perfilingreso->slug}}">
	    @method('PUT')
	    @csrf

		    <div class="formulario"> 
		      
		          <label for="">Viñeta</label>
		          <input type="text" name="vineta" id ="viñeta" value="{{$perfilingreso->vineta}}" placeholder="Inserte Viñeta" class="form-control">
		    </div>

		    <div class="formulario"> 
		          <label for="">Información</label>
		          <input type="text" name="elemento" id ="informacion-perfil" value="{{$perfilingreso->elemento}}" placeholder="Ingrese Información Deseada" class="form-control">
		    </div>

		    <div class="formulario"> 
		          <label for="">Slug</label>
		          <input type="text" name="slug" id ="informacion-perfil" value="{{$perfilingreso->slug}}" placeholder="Ingrese Identificador Del Elemento" class="form-control">
		    </div>

		    <div class="contenedor-botones">
		                
		        <button class="btn" type="submit"><span>Guardar</span></button>
		        
		    </div>

		</form>

	    <a href="{{route('editar-perfil-ingreso')}}"><button class="btn"><span>Cancelar</span></button></a>

	  </div>

@endsection