@extends('layouts.administrador')

@section('title', 'Editar Campo Laboral')

@section('content')

	<div class="seccion-principal">

<!----------------------------------------------------------------- EDITAR CAMPO LABORAL ---------------------------------------------------------->

		<div class="contenedor-titulo-seccion">

				<h3>Campo Laboral</h3>

		</div>

		<div class="formulario">
			
			<label for="">Descripción Campo Laboral</label>
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
								<td>Analizar, desarrollar y aplicar herramientas de modelos matemáticos, estadísticos y de simulación.</td>
								<td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
								<td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td>	
							</tr>

							<tr>
								<td>*</td>
								<td>Desarrollar, implementar y administrar software de sistemas o de aplicación que cumpla con los estándares de calidad con el fin de apoyar la productividad y competitividad de las organizaciones.</td>
								<td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
								<td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td>	
							</tr>

							<tr>
								<td>._</td>
								<td>Diseñar, desarrollar y administrar bases de datos conforme a requerimientos definidos, normas organizacionales de manejo y seguridad de la información, utilizando tecnologías emergentes.</td>
								<td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
								<td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td>	
							</tr>

							<tr>
								<td>#</td>
								<td>Diseño, gestión y administración en Redes Computacionales.</td>
								<td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
								<td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td>	
							</tr>

							<tr>
								<td>-----------</td>
								<td>El egresado puede desempeñarse como:</td>
								<td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
								<td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td>	
							</tr>

							<tr>
								<td>*</td>
								<td>Analista programador, ingeniero de soporte técnico, comercializador del sistema de cómputo; y una vez que haya adquirido experiencia, director de centro de cómputo; así como el puesto de una gerencia, administrador de desarrollo de software, consultor, instructor e investigador.</td>
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