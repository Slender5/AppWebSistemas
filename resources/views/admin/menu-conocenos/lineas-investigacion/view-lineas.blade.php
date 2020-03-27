@extends('layouts.administrador')

@section('title', 'Líneas de Investigación')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

			<div class="seccion-principal">

		<!----------------------------------------------------------------- VER LINEAS INVESTIGACIÓN---------------------------------------->

				<div class="contenedor-titulo-seccion">

						<h3>Líneas de Investigación</h3>

				</div>

				<div class="contenedor-botones">

					<a onclick="return confirm('¿Desea agregar un nuevo elemento?')" href="{{route('crear-Linea-Investigacion')}}"><button class="btn"><span>Agregar</span></button></a>

				</div>
					
				<div class="contenedor-cuerpo-noticia">

						<div class="contenedor-texto-conocenos">

							<div class="tabla-informacion-escolar">

								<table>
									
									<thead>
										<tr>
											<th>Programa</th>
											<th>Líneas de Investigación</th>
											<th>CLave LI TECNM</th>
											<th>Eliminar</th>
											<th>Editar</th>
										</tr>
									</thead>

									@foreach ($lineainvestigacion as $lineainvestigacio)

									<tr>
										<td>{{$lineainvestigacio->programa}}</td>
										<td>{{$lineainvestigacio->linea}}</td>
										<td>{{$lineainvestigacio->clave}}</td>
										<td><a onclick="return confirm('¿Desea eliminar este elemento?')" href="Eliminar-Linea-Investigacion/{{$lineainvestigacio->slug}}"><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></a></td>
										<td><a onclick="return confirm('¿Desea editar este elemento?')" href="/Lineas-Investigacion/{{$lineainvestigacio->slug}}/edit"><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></a></td>	
									</tr>

									@endforeach

								</table>		

							</div>

						</div>

				</div>
				
			</div>

@endsection
