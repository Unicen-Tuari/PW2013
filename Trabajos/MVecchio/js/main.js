function getPage(divi,pagina)
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
		document.getElementById(divi).innerHTML = "";
	       document.getElementById(divi).innerHTML=xmlhttp.responseText;
	    }
	  }
	 
	xmlhttp.open("GET",pagina,true);
	xmlhttp.send();
}

{// Carga 
$("#formularioconsulta").submit(function() 
{
	$.ajax({
	  type: "POST",
	  url: "nuevocliente.php",
	  data:$("#formularioconsulta").serialize(),
	  success: function(data)
			   {
			   		alert(data);
						alert("Cliente ingresado con exito");
			   }
	});
	return false;
});


}