@extends('layouts.administrador')

@section('title', 'Editar Campo Laboral')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

	<div class="seccion-principal">

<!----------------------------------------------------------------- EDITAR CAMPO LABORAL ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">

				<h3>Campo Laboral</h3>

		</div>

		<div class="formulario">
			
			<label for="">Descripción Campo Laboral</label>
			<a onclick="return confirm('¿Desea agregar un nuevo elemento?')" href="{{route('CampoLaboralCrear')}}"><button class="btn"><span>Agregar</span></button></a>

			
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

							@foreach ($campolaboral as $campolabora)

							<tr>

								<td>{{$campolabora->vineta}}</td>
								<td>{{$campolabora->elemento}}</td>
								<td><a onclick="return confirm('¿Desea eliminar este elemento?')" href="Campo-Laboral-Eliminar/{{$campolabora->slug}}"><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></a></td>
								<td><a onclick="return confirm('¿Desea editar este elemento?')" href="/CampoLaboral/{{$campolabora->slug}}/edit"><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></a></td>	
							</tr>

							@endforeach

						</table>		

					</div>

				</div>

		</div>

		<div class="contenedor-botones">

		<a href="{{route('CampoLaboralIndex')}}"><button class="btn"><span>Regresar</span></button></a>

		</div>
		
	</div>


@endsection