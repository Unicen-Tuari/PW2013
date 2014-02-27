$("#formulariologin").submit(function() 
	{
		$.ajax({
			type: "POST",
			url: "login.php",
			data:$("#formulariologin").serialize(),
			success: function(data)
				{
					if (data == '1')
						{			
							alert("Usuario incorrecto");
							window.location = "index.php";
						}
					else if (data == '2')
						{
							alert("Clave incorrecta");
							window.location = "index.php";
						}
					else
						{
							window.location = data;
						}
				}
		});
		return false;
	});


$("#logout").click(function()
	{
		$.ajax({
			type: "POST",
			url: "logout.php",
			data:$("#formlogin").serialize(),
			success: function(data)
				{
					window.location = "login.php";
				}
		});
		return false;
	});
