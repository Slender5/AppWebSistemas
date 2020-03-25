@extends('layouts.administrador')

@section('title', 'Editar Elemento Líneas de Investigación')

@section('content')

	  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Actualizar Datos</h3>

    </div>

    <div class="formulario"> 
      
          <label for="">Programa</label>
          <input type="text" name="" id ="viñeta" value="" placeholder="Nombre del Programa" class="form-control">
    </div>

    <div class="formulario"> 
          <label for="">Líneas de Investigación</label>
          <input type="text" name="" id ="informacion-perfil" value="" placeholder="Nombre de la Línea de Investigación" class="form-control">
    </div>

    <div class="formulario"> 
          <label for="">CLave LI TECNM</label>
          <input type="text" name="" id ="informacion-perfil" value="" placeholder="Clave Línea de Investigación TECNM" class="form-control">
    </div>

    <div class="contenedor-botones">
                
        <button class="btn"><span>Guardar</span></button>
        <button class="btn"><span>Cancelar</span></button>

    </div>

  </div>

@endsection
