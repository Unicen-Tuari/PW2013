/*Consultas*/

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


