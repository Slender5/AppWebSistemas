@extends('layouts.administrador')

@section('title', 'Editar Elemento Líneas de Investigación')

@section('content')


	 <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Agregar Datos</h3>

      </div>

      <form class="form-group" method="POST" action="/Lineas-Investigacion">
      @csrf

        <div class="formulario"> 
          
              <label for="">Programa</label>
              <input type="text" name="programa" id ="viñeta" value="" placeholder="Nombre del Programa" class="form-control" required>
        </div>

        <div class="formulario"> 
              <label for="">Líneas de Investigación</label>
              <input type="text" name="linea" id ="informacion-perfil" value="" placeholder="Nombre de la Línea de Investigación" class="form-control" required>
        </div>

        <div class="formulario"> 
              <label for="">CLave LI TECNM</label>
              <input type="text" name="clave" id ="informacion-perfil" value="" placeholder="Clave Línea de Investigación TECNM" class="form-control" required>
        </div>

        <div class="contenedor-botones">
                    
            <a onclick="return confirm('¿Desea guardar el nuevo elemento?')"><button class="btn" type="submit"><span>Guardar</span></button></a>

        </div>

      </form>

      <a onclick="return confirm('¿Desea cancelar el nuevo elemento?')" href="{{route('LineasInvestigacion')}}"><button class="btn"><span>Cancelar</span></button></a>

  </div>



@endsection
