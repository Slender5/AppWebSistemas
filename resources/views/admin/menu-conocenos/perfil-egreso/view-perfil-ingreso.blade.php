@extends('layouts.administrador')

@section('title', 'Perfil Egreso')

@section('content')

	<div class="seccion-principal">

<!----------------------------------------------------------------- PERFIL EGRESO ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">

				<h3>Perfil Egreso</h3> 

		</div>

		<div class="contenedor-cuerpo-noticia">

			<div class="contenedor-texto-conocenos">

				<ul>

					@foreach ($perfilegreso as $perfilegres)

					<li>{{$perfilegres->elemento}}</li>

					@endforeach

				</ul>

			</div>

		</div>

		<div class="contenedor-botones">

		<a onclick="return confirm('¿Desea editar la lista del perfil de egreso?')" href="{{route('editar-perfil-egreso')}}"><button class="btn"><span>Editar</span></button> </a>


		</div>
		
	</div>


@endsection