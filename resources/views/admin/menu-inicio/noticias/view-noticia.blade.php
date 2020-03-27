@extends('layouts.administrador')

@section('title', 'Noticias')

@section('content')

<!----------------------------------------------------------------- BUSCADOR ---------------------------------------------------------->

	<div class="seccion-principal">

		<div class="contenedor-boton-CE">

			<button class="btn"><span>Eliminación Anual</span></button>
			<button class="btn"><span>Agregar Noticia</span></button>

					
		</div>

		<div class="contenedor-buscador-noticia">

			<div class="buscador">

				<form action="" method="">		    
						<input type="search" placeholder="Noticia">	   	
				</form>

				<button type="" class="btn-buscar"><span><i class="icono izquierda fas fa-search"></i></span></button>
				
			</div>

		</div>
			
<!----------------------------------------------------------------- NOTICIA---------------------------------------------------------->

	@foreach ($noticias as $noticia)

		<div class="contenedor-titulo-seccion">

				<h3>Joven estudiante se gradua, como maestro pokemon</h3>

		</div>

		<div class="contenedor-cuerpo-noticia">

				<div class="contenedor-img-noticia">

					<img src="img/QRoo.png">
					
				</div>

				<div class="contenedor-texto">

					<p>Jafet ramsel se gradua como maestro pokemon de pueblo paleta al haber capturado al legendario pokemon ossielnorlax, es un acontecimiento impresionante ... </p>
					
				</div>

		</div>

		<div class="contenedor-botones">

		<button class="btn"><span>Eliminar</span></button>
		<button class="btn"><span>Editar</span></button>


		</div>

	@endforeach
		
	</div>

@endsection
