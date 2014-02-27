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
$("#form_mail").submit(function() 
{
	$.ajax({
		type: "POST",
		url: "index.php",
		data:$("#form_mail").serialize(),
		success: function(data)
		{
			$("#alerta_mail").html(data);
		}
	});
	return false;
});
$('#alerta_mail').on('closed.bs.alert','#alerta' , function () {
	$('#form_mail input,textarea').val('');

})