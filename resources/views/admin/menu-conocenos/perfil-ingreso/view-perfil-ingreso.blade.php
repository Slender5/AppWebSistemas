@extends('layouts.administrador')

@section('title', 'Perfil Ingreso')

@section('content')

	<div class="seccion-principal">

<!----------------------------------------------------------------- PERFIL INGRESO ---------------------------------------------------------->
		
		<div class="contenedor-titulo-seccion">

			<h3>Perfil De Ingreso</h3>

		</div>

		<div class="contenedor-cuerpo-noticia">

			<div class="contenedor-texto-conocenos">

				<ul>

					@foreach ($perfilingreso as $perfilingres)

					<li>{{$perfilingres->elemento}}</li>

					@endforeach

				</ul>

			</div>

		</div>

		<div class="contenedor-botones">

			<a onclick="return confirm('¿Desea editar la reticula del perfil de ingreso?')" href="{{route('editar-perfil-ingreso')}}"><button class="btn"><span>Editar</span></button></a>

		</div>
		
	</div>

@endsection