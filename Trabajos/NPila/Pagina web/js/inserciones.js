// Carga pacientes
$("#ingresopaciente").submit(function() 
	{
		$.ajax({
			type: "POST",
			url: "ipacientes.php",
			data:$("#ingresopaciente").serialize(),
			success: function(data)
				{
					alert("Paciente ingresado correctamente");
					window.location = 'index.php';
				}
		});
		return false;
	});

// Dar turnos
$("#formmedico").submit(function() 
	{
		$.ajax({
			type: "POST",
			url: "dturnos.php",
			data:$("#formmedico").serialize(),
			success: function(data)
				{
alert(data);					
alert("El turno fue ingresado correctamente");
					/*window.location = 'index.php';*/
				}
		});
		return false;
	});