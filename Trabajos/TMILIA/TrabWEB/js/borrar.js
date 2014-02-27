function borrarAuto(id){
	
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
	    {
		   window.location.reload();
		   document.getElementById("mensajes").innerHTML = "";
	       document.getElementById("mensajes").innerHTML=xmlhttp.responseText;
	       
	    }
	  }

	xmlhttp.open("POST","delete.php?id_car=" + id,true);
	xmlhttp.send();
}

//function reloadPage()