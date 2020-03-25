@extends('layouts.administrador')

@section('title', 'Perfil Egreso')

@section('content')

	<div class="seccion-principal">

<!----------------------------------------------------------------- PERFIL EGRESO ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">

				<h3>Perfil Egreso</h3>

		</div>

		@foreach ($perfilegreso as $perfilegres)

		<div class="contenedor-cuerpo-noticia">

			<div class="contenedor-texto-conocenos">

					<ul>

						<li>{{$perfilegres->elemento}}</li>

					</ul>

				</div>

		</div>

		@endforeach

		<div class="contenedor-botones">

		<a href="{{route('editar-perfil-egreso')}}"> <button class="btn"><span>Editar</span></button> </a>


		</div>
		
	</div>


@endsection