
// Obtencion de las noticias de manera asíncronica a la carga de la página web.
$("#cons_secciones").submit(function()
{
	$.ajax({
		type: "GET",
		url: "index.php",
		data: $("#cons_secciones").serialize(),
		success: function(data)
			{
				document.getElementById('content').innerHTML=data;
			}
});

return false;