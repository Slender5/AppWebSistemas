@extends('layouts.administration')

@section('title', 'Editar Noticia')

@section('content')


  				<div class="seccion-principal">

  					<div class="contenedor-titulo-seccion">

  							<h3>Editar Noticias</h3>

  					</div>

            <form class="form-goup" files="true" method="POST" action="/noticias-admin/{{$noticia->slug}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
  					<div class="formulario">

  						<label for="">Titulo</label>
  						<input type="text" name="titulo" id="titulo" value="{{$noticia->titulo}}" placeholder="Inserte Titulo Deseado" class="form-control">

  					</div>

  					<div class="contenedor-cargar-img">

  							<div class="contenedor-txt-seccion">

  								<label for="">Cargar IMG</label>

  							</div>

  							<div class="contenedor-boton-cargar">

  								<label for="file-upload" class="subir">
  									<i class="fas fa-cloud-upload-alt"></i> Subir Archivo
  								</label>
                <!--  <input type="file" >-->
  								<input id="file-upload" name="image" onchange='cambiar()' type="file"  style="display: none;" >

  								<div id="info-img">No se Eligió Archivo</div>


  							</div>


  							<div class="contenedor-img-seccion">

  								<img src="/images/news/{{$noticia->newimage}}">

  							</div>


  					</div>

  					<div class="formulario">

  						<label for="">Descripción Noticia</label>
  						<textarea placeholder="Inserte Descripción Deseada..." name="redaccion" >{{$noticia->redaccion}}</textarea>

  					</div>

  					<div class="contenedor-botones">

  						<button class="btn" type="submit" ><span>Guardar</span></button>
  						<button class="btn"><span>Cancelar</span></button>

  					</div>
          </form>
  				</div>


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="{{asset('js/select.js')}}"></script>
@endsection
