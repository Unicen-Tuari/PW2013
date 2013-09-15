function dataConsulta()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			if (xmlhttp.responseText == false){
				document.getElementById("form_dni").className="form-group has-error";
				document.getElementById("tableData").innerHTML=" ";
			}
			else
			{
				document.getElementById("form_dni").className="form-group has-success";
				document.getElementById("tableData").innerHTML=xmlhttp.responseText;
			}
		}
	}
	dni = document.getElementById("dni").value;
	xmlhttp.open("GET","index.php?dni=" + dni,true);
	xmlhttp.send();
}
function dataReparaciones()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("filtro1").disabled=false;
			document.getElementById("filtro2").disabled=false;
			document.getElementById("filtro3").disabled=false;
			document.getElementById("tableData").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","admin.php?rep=" + true,true);
	xmlhttp.send();
}
function dataClientes()
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("filtro1").disabled=true;
			document.getElementById("filtro2").disabled=true;
			document.getElementById("filtro3").disabled=true;
			document.getElementById("tableData").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","admin.php?cli=" + true,true);
	xmlhttp.send();
}
