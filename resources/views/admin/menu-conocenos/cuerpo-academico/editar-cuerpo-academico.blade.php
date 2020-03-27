@extends('layouts.administrador')

@section('title', 'Editar Cuerpo Académico')

@section('content')

	  <!----------------------------------------------------------- EDITAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Actualizar Datos</h3>

    </div>

    <form method="POST" action="/CuerposAcademicos/{{$CuerposAcademico->slug}}" enctype="multipart/form-data">
            @method('PUT')
		@csrf

          <div class="formulario"> 
                <label for="">Nombre del CA</label>
                <input type="text" name="nombre" id ="informacion-perfil" value="{{$CuerposAcademico->nombre}}" placeholder="Nombre del CA" class="form-control">
          </div>
      
          <div class="formulario"> 
                <label for="">Grado del CA</label>
                <input type="text" name="grado" id ="informacion-perfil" value="{{$CuerposAcademico->grado}}" placeholder="Grado del CA" class="form-control">
          </div>
      
          <div class="formulario"> 
                <label for="">ID CA</label>
                <input type="text" name="idCA" id ="informacion-perfil" value="{{$CuerposAcademico->idCA}}" placeholder="ID CA" class="form-control">
          </div>
      
          <div class="formulario"> 
                <label for="">Clave CA</label>
                <input type="text" name="clave" id ="informacion-perfil" value="{{$CuerposAcademico->clave}}" placeholder="Clave CA" class="form-control">
          </div>
      
          <div class="formulario"> 
                <label for="">Integrantes</label>
                <input type="text" name="integrantes" id ="informacion-perfil" value="{{$CuerposAcademico->integrantes}}" placeholder="Nombre del Integrante" class="form-control">
          </div>
      
          <div class="contenedor-botones">
                      
              <a onclick="return confirm('¿Seguro que desea actualizar?')"><button type="submit" class="btn"><span>Guardar</span></button></a>
              <a onclick="return confirm('¿Desea bandonar sin guardar?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
      
          </div>
    </form>

  </div>

@endsection