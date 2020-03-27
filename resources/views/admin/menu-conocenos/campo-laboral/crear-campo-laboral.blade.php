@extends('layouts.administrador')

@section('title', 'Nuevo Elemento Campo Laboral')

@section('content')

	<!--------------------------------------------------------------- AGREGAR ELEMENTOS CAMPO LABORAL ----------------------------------------------------------> 

  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Agregar Datos</h3>

    </div>

    <form class="form-group" method="POST" action="/CampoLaboral">
    @csrf

      <div class="formulario"> 

            <label for="">Viñetas</label>
            <input type="text" name="vineta" id ="informacion-perfil" value="" placeholder="1-@-*-3-." class="form-control" required>

      </div>

      <div class="formulario"> 

            <label for="">Información</label>
            <input type="text" name="elemento" id ="informacion-perfil" value="" placeholder="Información" class="form-control" required>

      </div>

      <div class="contenedor-botones">
                  
          <a onclick="return confirm('¿Desea guardar el nuevo elemento?')"><button class="btn" type="submit"><span>Guardar</span></button></a>

      </div>

    </form>   

    <a onclick="return confirm('¿Desea cancelar el nuevo elemento?')" href="{{route('CampoLaboralLista')}}"><button class="btn"><span>Cancelar</span></button>

  </div>

@endsection