// Informacion de pacientes
$("#cons_pacientes").submit(function()
{
	$.ajax({
		type: "POST",
		url: "infopaciente.php",
		data: $("#cons_pacientes").serialize(),
		success: function(data)
			{
				document.getElementById('content').innerHTML=data;
			}
		/*error: function(data)
			{
			alert("El paciente consultado no se encuentra. Compruebe que escribio el nombre correctamente y que el paciente este ingresado en la base de datos.")
			}*/
});

return false;

});

// Turnos
$("#cons_turnos").submit(function()
{
var fecha= 'Turnos del dia: ' + document.getElementById('fecha').value;
	$.ajax({
		type: "POST",
		url: "turnos.php",
		data: $("#cons_turnos").serialize(),
		success: function(data)
			{				
				document.getElementById('content').innerHTML=data;
				document.getElementById('fechacons').innerHTML=fecha;

			}
	
});

				
return false;

});

$("#nuevoPaciente").on('submit','#ingresopaciente',function() {

	$.ajax({
	  type: "POST",
	  url: "ipacientes.php",
	  data:$("#ingresopaciente").serialize(),
	  success: function(data)
			   {
				/*   alert(data);
				   if(data.indexOf("Error")== -1)
				   {
				    	$("#ingresopaciente").find('input:text, input:password, input:file, select, textarea').val('');
					}*/
			   }
	});
 
	return false;
});
