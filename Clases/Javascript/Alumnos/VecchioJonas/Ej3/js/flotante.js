function flotante()
{
var div = document.getElementById('flotante');

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