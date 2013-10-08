alert("Entro");
$("#formulariologin").submit(function() 
{
	$.ajax({
	  type: "POST",
	  url: "login.php",
	  data:$("#formulariologin").serialize(),
	  success: function(data)
			   {
					window.location = data;
			   }
	});
	return false;
});
