@extends('layouts.administrador')

@section('title', 'Perfil Ingreso')

@section('content')

	<div class="seccion-principal">

<!----------------------------------------------------------------- PERFIL INGRESO ---------------------------------------------------------->
		
		<div class="contenedor-titulo-seccion">

				<h3>Perfil De Ingreso</h3>

		</div>

		@foreach ($perfilingreso as $perfilingres)

		<div class="contenedor-cuerpo-noticia">

			<div class="contenedor-texto-conocenos">

					<ul>

						<li>{{$perfilingres->elemento}}</li>

					</ul>

				</div>

		</div>

		@endforeach

		<div class="contenedor-botones">

		<a href="{{route('editar-perfil-ingreso')}}"> <button class="btn"><span>Editar</span></button> </a>


		</div>
		
	</div>

@endsection