// Carga pacientes
$("#ingresopaciente").submit(function() 
	{
		$.ajax({
			type: "POST",
			url: "agregar_pacientes.php",
			data:$("#ingresopaciente").serialize(),
			success: function(data)
				{
					if (data == "correcto")
						{
							alert("Paciente ingresado correctamente");
							window.location = 'index.php';
						}
					else
						{
							alert(data);
						}
				}
		});
		return false;
	});

// Dar turnos
$("#formmedico").submit(function() 
	{
		$.ajax({
			type: "POST",
			url: "dar_turnos.php",
			data:$("#formmedico").serialize(),
			success: function(data)
				{
					if (data == "correcto")
						{
							alert("El turno fue ingresado correctamente");
							window.location = 'index.php';
						}
					else
						{
							alert(data);
						}					
				}
		});
		return false;
	});

// Carga medicos
$("#ingresomedico").submit(function() 
	{
		$.ajax({
			type: "POST",
			url: "agregar_medicos.php",
			data:$("#ingresomedico").serialize(),
			success: function(data)
				{
					if (data == "correcto")
						{
							alert("Medico ingresado correctamente");
							window.location = 'index.php';
						}
					else
						{
							alert(data);
						}	
				}
		});
		return false;
	});
