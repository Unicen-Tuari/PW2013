function getText()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	    	var json = JSON.parse(xmlhttp.responseText);
	       document.getElementById("email").value=json.Email;
	    }
	  }

	nombre = document.getElementById("nombre").value;
	xmlhttp.open("GET","getData.php?nombre=" + nombre,true);
	xmlhttp.send();

}
