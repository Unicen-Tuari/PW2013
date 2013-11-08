
function getNoticias(seccion){
	$.ajax({
		type: "GET",
		url: "getNoticias.php?idSection="+seccion,
		success: function(data)
			{
				document.getElementById('content').innerHTML=data;
			}});

}