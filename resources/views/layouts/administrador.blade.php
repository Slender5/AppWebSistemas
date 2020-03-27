<!DOCTYPE html>
<html lang='es'>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title> Sistemas - @yield('title')</title>
		<script src="https://kit.fontawesome.com/13b3d85bca.js" crossorigin="anonymous"></script>
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos-contenedores.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos-noticias.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos-formularios.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/organigrama.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/alertas.css')}}">


</head>

<body>

<div class="contenedor">

<!------------------------------------------------------------------ HEADER ---------------------------------------------------------->

	<header>

			<div class="contenedor-logos">

				<img src="{{ asset('img/Gob.png')}}" id="gobierno">
				<img src="{{ asset('img/Educacion.png')}}" id="educacion">
				<img src="{{ asset('img/TecNM.jpg')}}" id="tecnm">
				<img src="{{ asset('img/QRoo.png')}}" id="qroo">
				<img src="{{ asset('img/TecFCP.png')}}" id="fcp">

			</div>


			<div class="contenedor-titulo">

				<div class="contenedor-img">

					<img src="{{ asset('img/Isc.jpg')}}" id="isc">

				</div>

				<div class="contenedor-txt">

					<h1>INGENIERÍA EN SISTEMAS COMPUTACIONALES</h1>

				</div>

			</div>

	</header>

<!------------------------------------------------------------------ CUERPO ---------------------------------------------------------->

	<div class="contenedor-cuerpo">

		<!----------------------------------------------------------- MENU ---------------------------------------------------------->


		<div class="contenedor-menu">

			<a href="#" class="btn-menu">Menu<i class="icono fa fa-bars"></i></a> 
						
			<ul class="menu">

				<li><a href="#"><i class="icono izquierda fa fa-home"></i>Inicio<i class=" icono derecha fa fa-chevron-down"></i></a>
					<ul>
						<li><a href="#"><i class="icono izquierda fab fa-slideshare"></i>Slider</a></li>
						<li><a href="#"><i class="icono izquierda far fa-newspaper"></i>Noticias</a></li>
						<li><a href="#"><i class="icono izquierda far fa-calendar-alt"></i>Calendario</a></li>
					</ul>
				</li>
							
				<li><a href="#"><i class="icono izquierda far fa-handshake"></i>Conócenos<i class=" icono derecha fa fa-chevron-down"></i></a>
					<ul>
						<li><a href="/informacion"><i class="icono izquierda fas fa-book"></i>Misión, Visión Y Objetivos</a></li>
						<li><a href="{{route('perfil-ingreso')}}"><i class="icono izquierda fas fa-user-tie"></i>Perfil Ingreso</a></li>
						<li><a href="{{route('perfil-egreso')}}"><i class="icono izquierda fas fa-user-graduate"></i>Perfil Egreso</a></li>
						<li><a href={{route('reticula')}}><i class="icono izquierda fas fa-table"></i>Reticula</a></li>
						<li><a href="{{route('LineasInvestigacion')}}"><i class="icono izquierda fab fa-searchengin"></i>Líneas de Investigación</a></li>
						<li><a href="/CuerposAcademicos"><i class="icono izquierda fas fa-chalkboard-teacher"></i>Cuerpos Académicos</a></li>
						<li><a href="#"><i class="icono izquierda fas fa-sitemap"></i>Organigrama</a></li>
						<li><a href="{{route('CampoLaboralIndex')}}"><i class="icono izquierda fas fa-city"></i>Campo de Trabajo</a></li>

					</ul>
				</li>

				<li><a href="#"><i class="icono izquierda fas fa-school"></i>Infraestructura<i class=" icono derecha fa fa-chevron-down"></i></a>

					<ul>
						<li><a href="#"><i class="icono izquierda fas fa-hdd"></i>Lab. Cisco</a></li>
						<li><a href="#"><i class="icono izquierda fas fa-desktop"></i>Lab. Sistemas</a></li>
						<li><a href="#"><i class="icono izquierda fas fa-microchip"></i>Lab. Microprocesadores</a></li>
						<li><a href="#"><i class="icono izquierda fas fa-laptop-code"></i>Celula de Desarrollo</a></li>
					</ul>
				</li>

				<li><a href="#"><i class="icono izquierda fas fa-chalkboard-teacher"></i>Académicos<i class=" icono derecha fa fa-chevron-down"></i></a>

					<ul>
						<li><a href="#"><i class="icono izquierda fab fas fa-rocket"></i>Proyectos</a></li>
						<li><a href="#"><i class="icono izquierda far fa-calendar-check"></i>Eventos</a></li>
						<li><a href="#"><i class="icono izquierda fas fa-file-invoice"></i>Convocatorias</a></li>
						<li><a href="#"><i class="icono izquierda fas fas fa-window-restore"></i>Programas</a></li>
					</ul>
				</li>


				<li><a href="#"><i class="icono izquierda far fa-image"></i>Galería<i class=" icono derecha fa fa-chevron-down"></i></a>

					<ul>
						<li><a href="#"><i class="icono izquierda far fa-images"></i>Fotos</a></li>
					</ul>

				</li>
							
			</ul>



		</div>

		<!----------------------------------------------------------- CONTENEDOR ------------------------------------------------------->


		<div class="contenedor-informacion">

			<!--------------------------------------------------------- SLIDER --------------------------------------------------------->

				@yield('content-slider')										
 

			<!--------------------------------------------------------- INFOR --------------------------------------------------------->


			<div class="contenedor-contenido">


				  @yield('content')


			</div>

		</div>

	</div>

<!------------------------------------------------------------------ FOOTER ---------------------------------------------------------->


	<footer>
		<p>© Copyright 2020, Todos Los Derechos Reservados</p>
	</footer>

</div>

	<script src="{{ asset('js/jquery.js')}}"></script>
	<script src="{{ asset('js/main.js')}}"></script>

	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="{{ asset('js/select.js')}}"></script>

	<script src="{{ asset('btn-cargar.js')}}"></script>
</body>

</html>
