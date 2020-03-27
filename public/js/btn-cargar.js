/****************************************CARGAR ARCHIVOS*******************************************/

function cambiar(){
    var pdrs = document.getElementById('file-upload').files[0].name;
    document.getElementById('info-img').innerHTML = pdrs;
}