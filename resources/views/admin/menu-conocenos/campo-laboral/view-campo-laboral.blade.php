@extends('layouts.administrador')

@section('title', 'Campo Laboral')

@section('content')

		<div class="seccion-principal">

<!----------------------------------------------------------------- CAMPO LABORAL ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">

				<h3>Campo Laboral</h3>

		</div>

		<div class="contenedor-cuerpo-noticia">

				<div class="contenedor-texto-conocenos">

					<ul>

						@foreach ($campolaboral as $campolabora)
						
						<li>{{$campolabora->elemento}}</li>
						
						@endforeach
						
					</ul>

				</div>

		</div>

		<div class="contenedor-botones">

		<a onclick="return confirm('¿Desea editar lista del campo laboral?')" href="{{route('CampoLaboralLista')}}"><button class="btn"><span>Editar</span></button></a>


		</div>
		
	</div>


@endsection