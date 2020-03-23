@extends('layouts.administrador')

@section('title', 'Líneas de Investigación')

@section('content')


			<div class="seccion-principal">

		<!----------------------------------------------------------------- VER LINEAS INVESTIGACIÓN---------------------------------------->

				<div class="contenedor-titulo-seccion">

						<h3>Líneas de Investigación</h3>

				</div>

				<div class="contenedor-botones">

					<button class="btn"><span>Agregar</span></button>

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
											<th>Nombre del CA</th>
											<th>Grado del CA</th>
											<th>ID CA</th>
											<th>Clave CA</th>
											<th>Integrantes</th>
											<th>Eliminar</th>
											<th>Editar</th>
										</tr>
									</thead>

									<tr>
										<td>Ingeniería en Sistemas Computacionales</td>
										<td>Redes Gestión de Datos y Conectividad</td>
										<td>LGAC-2017-SFCP-ISCO-10</td>
										<td>Tecnologías de la información para la investigación cientifica, tecnológica e innovación</td>
										<td>En Formación</td>
										<td>28957</td>
										<td>ITSCP-CA-2</td>
										<td>MTE.Noemi Guadalupe Castillo Sosa</td>
										<td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
										<td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td>	
									</tr>

									<tr>
										<td>Ingeniería en Sistemas Computacionales</td>
										<td>Tecnología Aplicada a la Educación</td>
										<td>LGAC-2017-SFCP-ISCO-11</td>
										<td>Tecnologías de la información para la investigación cientifica, tecnológica e innovación</td>
										<td>En Formación</td>
										<td>28957</td>
										<td>ITSCP-CA-2</td>
										<td>MC. Arizbe del Socorro Arana Kantun</td>
										<td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
										<td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td>	
									</tr>

									<tr>
										<td>Ingeniería en Sistemas Computacionales</td>
										<td>Tecnologías de Desarrollo Web Y Móvil</td>
										<td>LGAC-2017-SFCP-ISCO-11</td>
										<td>Tecnologías de la información para la investigación cientifica, tecnológica e innovación</td>
										<td>En Formación</td>
										<td>28957</td>
										<td>ITSCP-CA-2</td>
										<td>MC. Arizbe del Socorro Arana Kantun</td>
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