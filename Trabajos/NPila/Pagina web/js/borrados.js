function borrarTurno(id) 
	{
		alert("entro");
		$.ajax({
			type: "POST",
			url: "turnos.php",
			data:{valor:id},
			success: function(data)
				{
					alert('Borro');
				}
		});
		return false;
	});
