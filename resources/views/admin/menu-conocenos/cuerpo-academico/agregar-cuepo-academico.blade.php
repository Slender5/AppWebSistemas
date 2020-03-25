@extends('layouts.administrador')

@section('title', 'Cuerpo Académico')

@section('content')

	<!--------------------------------------------------------------- EDITAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Actualizar Datos</h3>

    </div>

    <div class="formulario"> 
          <label for="">Nombre del CA</label>
          <input type="text" name="" id ="informacion-perfil" value="" placeholder="Nombre del CA" class="form-control">
    </div>

    <div class="formulario"> 
          <label for="">Grado del CA</label>
          <input type="text" name="" id ="informacion-perfil" value="" placeholder="Grado del CA" class="form-control">
    </div>

    <div class="formulario"> 
          <label for="">ID CA</label>
          <input type="text" name="" id ="informacion-perfil" value="" placeholder="ID CA" class="form-control">
    </div>

    <div class="formulario"> 
          <label for="">Clave CA</label>
          <input type="text" name="" id ="informacion-perfil" value="" placeholder="Clave CA" class="form-control">
    </div>

    <div class="formulario"> 
          <label for="">Integrantes</label>
          <input type="text" name="" id ="informacion-perfil" value="" placeholder="Nombre del Integrante" class="form-control">
    </div>

    <div class="contenedor-botones">
                
        <button class="btn"><span>Guardar</span></button>
        <button class="btn"><span>Cancelar</span></button>

    </div>

  </div>

@endsection