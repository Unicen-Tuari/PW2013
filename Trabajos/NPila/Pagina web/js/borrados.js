/*------------------------------------ Borrado de Turnos ------------------------------------*/
function borrarTurno(id) 
	{
		$.ajax({
			type: "POST",
			url: "turnos.php",
			data:{valor:id},
			success: function(data)
				{
					alert('El turno fue borrado correctamente');
					window.location = 'index.php';
				}
		});
		return false;
	};

/*------------------------------------ Borrado de Pacientes ------------------------------------*/
function borrarPaciente(id) 
	{
		$.ajax({
			type: "POST",
			url: "informacion_paciente.php",
			data:{valor:id},
			success: function(data)
				{
					alert('El paciente fue borrado correctamente');
					window.location = 'index.php';
				}
		});
		return false;
	};

/*------------------------------------ Borrado de Medicos ------------------------------------*/
function borrarMedico(id) 
	{
		$.ajax({
			type: "POST",
			url: "medicos.php",
			data:{valor:id},
			success: function(data)
				{
					alert('El medico fue borrado correctamente');
					window.location = 'index.php';
				}
		});
		return false;
	};
