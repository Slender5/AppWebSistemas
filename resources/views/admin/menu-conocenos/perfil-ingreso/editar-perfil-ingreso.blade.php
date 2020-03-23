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
			<button class="btn"><span>Agregar</span></button>

			
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

							<tr>
								<td>1</td>
								<td>Implementa aplicaciones computacionales para solucionar problemas de diversos contextos, integrando diferentes tecnologías, plataformas o dispositivos.</td>
								<td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
								<td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td>	
							</tr>

							<tr>
								<td>*</td>
								<td>Diseña, desarrolla y aplica modelos computacionales para solucionar problemas, mediante la selección y uso de herramientas matemáticas.</td>
								<td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
								<td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td>	
							</tr>

							<tr>
								<td>._</td>
								<td>Diseña e implementa interfaces para la automatización de sistemas de hardware y desarrollo del software asociado.</td>
								<td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
								<td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td>	
							</tr>

							<tr>
								<td>#</td>
								<td>Coordina y participa en equipos multidisciplinarios para la aplicación de soluciones innovadoras en diferentes contextos.</td>
								<td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
								<td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td>	
							</tr>

							<tr>
								<td>@</td>
								<td>"Agregar más LI"</td>
								<td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
								<td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td>	
							</tr>

						</table>		

					</div>

				</div>

		</div>

		<div class="contenedor-botones">

		<button class="btn"><span>Guardar</span></button>
		<button class="btn"><span>Cancelar</span></button>


		</div>
		
	</div>

@endsection