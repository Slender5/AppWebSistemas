@extends('layouts.administrador')

@section('title', 'Actualizar Elemento Campo Laboral')

@section('content')

	 <!--------------------------------------------------------------- ACTUALIZAR ELEMNTO CAMPO LABORAL ----------------------------------------------------------> 

  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Actualizar Datos</h3>

    </div>

    <div class="formulario"> 
          <label for="">Viñetas</label>
          <input type="text" name="" id ="informacion-perfil" value="" placeholder="1-@-*-3-." class="form-control">
    </div>

    <div class="formulario"> 
          <label for="">Información</label>
          <input type="text" name="" id ="informacion-perfil" value="" placeholder="Información" class="form-control">
    </div>

    <div class="contenedor-botones">
                
        <button class="btn"><span>Guardar</span></button>
        <button class="btn"><span>Cancelar</span></button>

    </div>

  </div>

@endsection