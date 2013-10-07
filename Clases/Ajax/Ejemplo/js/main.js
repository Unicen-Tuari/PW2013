function getText()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
	       document.getElementById("email").value=xmlhttp.responseText;
	    }
	  }

	nombre = document.getElementById("nombre").value;

	//Cargar datos desde un archivo plano
	//xmlhttp.open("GET","email.txt",true);
	
	//Consultar al servidor usando PHP + GET
	//xmlhttp.open("GET","getEmail.php?nombre=" + nombre,true);
	//xmlhttp.send();

	//Consultar al servidor usando PHP + POST
	xmlhttp.open("POST","getEmailPost.php",true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("nombre="+nombre)	;
	
}
