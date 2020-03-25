@extends('layouts.administrador')

@section('title', 'Editar Perfil Ingreso')

@section('content')

	<div class="seccion-principal">

<!----------------------------------------------------------------- EDITAR PERFIL INGRESO ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">

				<h3>Perfil Ingreso</h3>

		</div>

		<div class="formulario">
			
			<label for="">Descripción Perfil Ingreso</label>
			<a href="{{route('crear-perfil-ingreso')}}"><button class="btn"><span>Agregar</span></button></a>

			
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

							@foreach ($perfilingreso as $perfilingres)

							<tr>
								<td>{{$perfilingres->vineta}}</td>
								<td>{{$perfilingres->elemento}}</td>
								<td><a href="eliminar-elemento/{{$perfilingres->slug}}"><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></a></td>
								<td><a href="/NuevoElemento/{{$perfilingres->slug}}/edit"><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></a></td>	
							</tr>

							@endforeach

						</table>		

					</div>

				</div>

		</div>

		<div class="contenedor-botones">

		<a href="{{route('perfil-ingreso')}}"> <button class="btn"><span>Volver</span></button> </a>


		</div>
		
	</div>

@endsection