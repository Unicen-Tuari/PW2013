function ocultar()
{
var div = document.getElementById('ocultar_correo');

if (div.style.display == 'none')
mostrardiv(div);
else
cerrar(div);
}

function mostrardiv(div) {
div.style.display = '';
}

function cerrar(div) {
div.style.display='none';
}

function salir() {
document.getElementById('cerrar').style.display='none';
}

