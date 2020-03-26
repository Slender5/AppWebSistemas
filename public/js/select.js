<<<<<<< HEAD
	/********************************************Select**********************************************/

$(document).ready(function(){

	$('.btn-seleccionar').click(function(){

		$('ul').toggleClass('active');

	});

	/**	$('.contenedor-select-seccion ul li').click(function(){

		$('ul').toggleClass('active');

	}); **/

});

=======
	/********************************************Select**********************************************/

$(document).ready(function(){

	$('.btn-seleccionar').click(function(){
		$('ul').toggleClass('active');
	});

});

function cambiar(){
    var pdrs = document.getElementById('file-upload').files[0].name;
    document.getElementById('info-img').innerHTML = pdrs;
}
>>>>>>> 4022e356adf2d748e7d8cd7c91111d927a9ad44d
