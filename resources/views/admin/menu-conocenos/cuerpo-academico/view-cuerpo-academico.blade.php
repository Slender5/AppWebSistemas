@extends('layouts.administrador')

@section('title', 'Cuerpo Académico')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

<div class="seccion-principal">

<!----------------------------------------------------------------- VER LINEAS INVESTIGACIÓN  ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">

				<h3>Cuerpo Académico</h3>

		</div>

		<div class="contenedor-botones">

			<a href="CuerposAcademicos/create"><button class="btn"><span>Agregar</span></button></a>

		</div>
			
		<div class="contenedor-cuerpo-noticia">

				<div class="contenedor-texto-conocenos">

					<div class="tabla-informacion-escolar">

						<table>
							
							<thead>
								<tr>
									<th>Nombre del CA</th>
									<th>Grado del CA</th>
									<th>ID CA</th>
									<th>Clave CA</th>
									<th>Integrantes</th>
									<th>Eliminar</th>
									<th>Editar</th>
								</tr>
							</thead>

							@foreach($cuerpos as $cuerpo)

							<tr>
								<td>{{$cuerpo->nombre}}</td>
								<td>{{$cuerpo->grado}}</td>
								<td>{{$cuerpo->idCA}}</td>
								<td>{{$cuerpo->clave}}</td>
								<td>{{$cuerpo->integrantes}}</td>
								<form action="/CuerposAcademicos/{{$cuerpo->slug}}" method="POST">
								@csrf
								@method('DELETE')
								<td>
								<a onclick="return confirm('¿Seguro que desea eliminar este elemento?')"><button class="btn-tabla" type="submit"><i class="far fa-trash-alt"></i></button></a>
								</td>
								</form>

								<td><a href="/CuerposAcademicos/{{$cuerpo->slug}}/edit"><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></a></td>	
							</tr>

							@endforeach

						</table>		

					</div>

				</div>

		</div>
		
	</div>

@endsection