$("#borrar_turn").click(function() 
	{
		$.ajax({
			type: "POST",
			url: "turnos.php",
			data:$("#id_turno").serialize(),
			success: function(data)
				{
					document.getElementById('content').innerHTML=data;
				}
		});
		return false;
	});
