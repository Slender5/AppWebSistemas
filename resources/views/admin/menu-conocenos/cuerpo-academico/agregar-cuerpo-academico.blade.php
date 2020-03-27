@extends('layouts.administrador')

@section('title', 'Cuerpo Académico')

@section('content')

	<!--------------------------------------------------------------- EDITAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Crear Cuerpo Académico</h3>

    </div>

    <form class="form-group" method="POST" action="/CuerposAcademicos">
      @csrf

          <div class="formulario"> 
                <label for="">Nombre del CA</label>
                <input type="text" name="nombre" id ="informacion-perfil" value="" placeholder="Nombre del CA" class="form-control">
          </div>
      
          <div class="formulario"> 
                <label for="">Grado del CA</label>
                <input type="text" name="grado" id ="informacion-perfil" value="" placeholder="Grado del CA" class="form-control">
          </div>
      
          <div class="formulario"> 
                <label for="">ID CA</label>
                <input type="text" name="idCA" id ="informacion-perfil" value="" placeholder="ID CA" class="form-control">
          </div>
      
          <div class="formulario"> 
                <label for="">Clave CA</label>
                <input type="text" name="clave" id ="informacion-perfil" value="" placeholder="Clave CA" class="form-control">
          </div>
      
          <div class="formulario"> 
                <label for="">Integrantes</label>
                <input type="text" name="integrantes" id ="informacion-perfil" value="" placeholder="Nombre del Integrante" class="form-control">
          </div>
      
      
          <div class="contenedor-botones">
                      
              <a onclick="return confirm('¿Desea guardar el nuevo elemento?')"><button type="submit" class="btn"><span>Agregar</span></button></a>
              <a onclick="return confirm('¿Desea cancelar el nuevo elemento?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
      
          </div>
    </form>

  </div>

@endsection