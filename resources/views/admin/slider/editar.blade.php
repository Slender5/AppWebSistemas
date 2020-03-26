@extends('layouts.administration')

@section('title', 'Editar Noticia')

@section('content')
		<div class="seccion-principal">
  		<div class="contenedor-titulo-seccion-select">

  				<h3>Editar elementos del Slider</h3>

  			<div class="contenedor-select-seccion">

  				<button class="btn-seleccionar">Seleccionar IMG</button>
  					<ul>
              @foreach ($slidersG as $sliderG)
                <li><a href="/slider/{{$sliderG->slug}}/editar/">{{$sliderG->id}}</a></li>
              @endforeach

  					</ul>
  					<i></i>

  			</div>

  		</div>

  	<!----------------------------------------------------------------- FORMULARIO - CARGAR IMG ---------------------------------------------------------->

    <form class="form-goup" files="true" method="POST" action="/slider/{{$slider->slug}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
  		<div class="formulario">


  			<label for="">Titulo</label>

  			<input type="text" name="contenido" id="titulo" value="{{$slider->contenido}}" placeholder="Inserte Titulo Deseado" class="form-control">

  		</div>

  		<div class="contenedor-cargar-img">

  				<div class="contenedor-txt-seccion">

  					<label for="">Cargar IMG</label>

  				</div>

  				<div class="contenedor-boton-cargar">

  					<label for="file-upload" class="subir">
  						<i class="fas fa-cloud-upload-alt"></i> Subir Archivo
  					</label>

  					<input id="file-upload" name="image" value="/images/slider/{{$slider->image}}" onchange='cambiar()' type="file" style='display: none;'/>
          
  					<div id="info-img">No se Eligió Archivo</div>


  				</div>


  				<div class="contenedor-img-seccion">

  					<img src="Img/sistemas.png">

  				</div>


  		</div>

  		<div class="contenedor-botones">

  			<button class="btn" type="submit"><span>Guardar</span></button>

  		</div>

</form>


  <!------------------------------------------------------------- PREVISUALIZACIÓN ---------------------------------------------------------->


  		<div class="contenedor-previsualizar-seccion">

  			<div class="contenedor-titulo-seccion">

  				<h3>Previsualización</h3>

  			</div>

        @foreach ($slidersG as $sliderG)


  			<div class="contenedor-seccion-preliminar">

  				<img src="/images/slider/{{$sliderG->image}}">
  				<h2>{{$sliderG->contenido}}</h2>

  			</div>
      @endforeach


        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="js/select.js"></script>

  		</div>


</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="{{asset('js/select.js')}}""></script>
@endsection
