@extends('layouts.administration')

@section('title', 'Editar Slider')



@section('content')

	<!----------------------------------------------------------------- SELECT ---------------------------------------------------------->

	<div class="seccion-principal">

		<div class="contenedor-titulo-seccion-select">

				<h3>Editar elementos del Slider</h3>

			<div class="contenedor-select-seccion">

				<button class="btn-seleccionar">Seleccionar IMG</button>
					<ul>
					@foreach ($slidersG as $sliderG)


						<li><a href="/slider/{{$sliderG->slug}}/editar">{{$sliderG->id}}</a></li>
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

					<input id="file-upload"  name="image" type="file" value="{{$slider->image}}" onchange='cambiar()'  style='display: none;'/>

					<div id="info-img">No se Eligió Archivo</div>


				</div>


				<div class="contenedor-img-seccion">

					<img src="/images/slider/{{$slider->image}}">

				</div>


		</div>

		<div class="contenedor-botones">

			<button type="submit" class="btn"><span>Guardar</span></button>

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



		</div>

	</div>

@endsection
