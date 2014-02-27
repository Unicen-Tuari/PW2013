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
function insertCliente() {
	$.ajax({
		type: "POST",
		url: "insertcliente.php",
		data:$("#formcontacto").serialize(),
		success: function(data){
			alert(data);
			document.forms['formcontacto'].reset();
		}
	});
	return false;
}
