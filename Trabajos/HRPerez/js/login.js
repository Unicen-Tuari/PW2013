$("#formulariologin").submit(function()
{
		$.ajax({
				type:"POST",
				url:"admin_login.php",
				data:$("#formulariologin").serialize(),
				success: function(data)
				{
						
						window.location=data;
				}
		});
		return false;
});

$("#logout").click(function()
	{
		$.ajax({
			type: "POST",
			url: "panel.php",
			data:$("#formulariologin").serialize(),
			success: function(data)
				{
					window.location = "admin_login.php";
				}
		});
		return false;
	});
