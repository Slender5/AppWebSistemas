@extends('layouts.administrador')

@section('title', 'Editar Perfil Egreso')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

	<div class="seccion-principal">

<!----------------------------------------------------------------- EDITAR PERFIL EGRESO ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">

				<h3>Perfil Egreso</h3>

		</div>

		<div class="formulario">
			
			<label for="">Descripción Perfil Egreso</label>
			<a onclick="return confirm('¿Desea agregar un nuevo elemento?')" href="{{route('crear-perfil-egreso')}}"><button class="btn"><span>Agregar</span></button></a>

			
		</div>

		<div class="contenedor-cuerpo-noticia">

				<div class="contenedor-texto-conocenos">

					<div class="tabla-informacion-escolar">

						<table>
							
							<thead>
								<tr>
									<th>Viñetas</th>
									<th>Información</th>
									<th>Eliminar</th>
									<th>Editar</th>
								</tr>
							</thead>

							@foreach ($perfilegreso as $perfilegres)

							<tr>
								<td>{{$perfilegres->vineta}}</td>
								<td>{{$perfilegres->elemento}}</td>
								<td><a onclick="return confirm('¿Desea eliminar este elemento?')" href="Perfil-Egreso-Eliminar/{{$perfilegres->slug}}"><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></a></td>
								<td><a onclick="return confirm('¿Desea editar este elemento?')" href="/PerfilEgreso/{{$perfilegres->slug}}/edit"><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></a></td>	
							</tr>

							@endforeach

						</table>		

					</div>

				</div>

		</div>

		<div class="contenedor-botones">

		<a href="{{route('perfil-egreso')}}"> <button class="btn"><span>Volver</span></button> </a>


		</div>
		
	</div>

@endsection