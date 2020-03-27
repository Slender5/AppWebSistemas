@extends('layouts.administrador')

@section('title', 'Actualizar Elemento Campo Laboral')

@section('content')

	 <!--------------------------------------------------------------- ACTUALIZAR ELEMNTO CAMPO LABORAL ----------------------------------------------------------> 

  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Actualizar Datos</h3>

    </div>

    <form class="form-group" method="POST" action="/CampoLaboral/{{$campolaboral->slug}}">
    @method('PUT')
    @csrf

      <div class="formulario"> 
            <label for="">Viñetas</label>
            <input type="text" name="vineta" id ="informacion-perfil" value="{{$campolaboral->vineta}}" placeholder="1-@-*-3-." class="form-control" required>
      </div>

      <div class="formulario"> 
            <label for="">Información</label>
            <input type="text" name="elemento" id ="informacion-perfil" value="{{$campolaboral->elemento}}" placeholder="Información" class="form-control" required>
      </div>

      <div class="contenedor-botones">
                  
          <a onclick="return confirm('¿Desea guardar los cambios?')"><button class="btn" type="submit"><span>Guardar</span></button></a>

      </div>

    </form>

      <a onclick="return confirm('¿Desea cancelar los cambios realizados?')" href="{{route('CampoLaboralLista')}}"><button class="btn"><span>Cancelar</span></button></a>

  </div>

@endsection