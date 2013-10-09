$("#form_consulta").submit(function() 
{
	$.ajax({
		type: "POST",
		url: "index.php",
		data:$("#form_consulta").serialize(),
		success: function(data)
		{
			if (data == false)
			{
				$("#form_dni").removeClass('has-success has-error').addClass('has-error');
				$("#tableData").html('');
			}
			else
			{
				$("#form_dni").removeClass('has-success has-error').addClass('has-success');
				$("#tableData").html(data);
			}
			$('[data-spy="scroll"]').each(function () 
			{
				var $spy = $(this).scrollspy('refresh');
			})
		}
	});
	return false;
});