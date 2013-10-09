function radioBuscacli()
{
	$('#campo_toggle').fadeOut(200);
	$("#form_buscador").removeClass('has-success has-error');
	$('#check_na').prop('checked',true);
	busquedaNA();
}
function radioBuscarep()
{
	$('#campo_toggle').fadeIn(200);
	$("#form_buscador").removeClass('has-success has-error');
}
function busquedaIDcliente()
{
	$('#input_principal').val('');
	$('#input_principal').attr('placeholder','ID Cliente');
	$('#input_secundario').slideUp(200);
	$("#form_buscador").removeClass('has-success has-error');
}
function busquedaNA()
{
	$('#input_principal').val('');
	$('#input_secundario').val('');
	$('#input_principal').attr('placeholder','Nombre');
	$('#input_secundario').slideDown(200);
	$('#input_secundario').attr('placeholder','Apellido');
	$("#form_buscador").removeClass('has-success has-error');
}
function busquedaID()
{
	$('#input_principal').val('');
	$('#input_principal').attr('placeholder','ID Reparación');
	$('#input_secundario').slideUp(200);
	$("#form_buscador").removeClass('has-success has-error');
}
$("#form_login").submit(function() 
{
	$.ajax({
		type: "POST",
		url: "login.php",
		data:$("#form_login").serialize(),
		success: function(data)
		{
			if (data == 'user')
			{
				alert('Usuario Invalido');
			}
			else if (data == 'pass')
			{
				alert('Password Invalido');
			}
			else
			{
				window.location = data;
			}
		}
	});
	
	return false;
});
$('#buscar').on('submit','#form_buscador',function()  
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data:$("#form_buscador").serialize(),
		success: function(data)
		{
			if (data == false)
			{
				$("#form_buscador").removeClass('has-success has-error').addClass('has-error');
			}
			else
			{
				$('#buscar').html(data);
			}
		}
	});
	return false;
});
$("#tab_container").ready(function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "rep=true",
		success: function(data)
		{
			$("#tablareparaciones").html(data);
			$('a[href=#tablareparaciones]').tab('show');
		}
	});
	return false;
});
$("#tab_reparaciones").click(function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "rep=true",
		success: function(data)
		{
			$("#tablareparaciones").html(data);
			$('a[href=#tablareparaciones]').tab('show');
		}
	});
	return false;
});
$("#tab_clientes").click(function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "cli=true",
		success: function(data)
		{
			$("#tablaclientes").html(data);
			$('a[href=#tablaclientes]').tab('show');
		}
	});
	return false;
});
$("#tab_buscar").click(function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "buscar=true",
		success: function(data)
		{
			$("#buscar").html(data);
			$('a[href=#buscar]').tab('show');
		}
	});
	return false;
});
$("#tab_nuevareparacion").click(function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "nuevarep=true",
		success: function(data)
		{
			$("#nuevareparacion").html(data);
			$('a[href=#nuevareparacion]').tab('show');
		}
	});
	return false;
});
$("#tab_nuevocliente").click(function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "nuevocli=true",
		success: function(data)
		{
			$("#nuevocliente").html(data);
			$('a[href=#nuevocliente]').tab('show');
		}
	});
	return false;
});
$('#tablareparaciones').on('click','table tbody tr',function() 
{
	$("#modal_body").load("admin.php",{id_reparacion:$(this).children('td').html()});
	$('#modal_emergente').modal('show');
	return false;
});
$('#tablaclientes').on('click','table tbody tr',function() 
{
	$("#modal_body").load("admin.php",{id_cliente:$(this).children('td').html()});
	$('#modal_emergente').modal('show');
	return false;
});
$('#buscar').on('click','table tbody tr',function() 
{
	if (($('#buscar table thead tr th:eq(3)').text()) == 'Articulo')
	{
		$("#modal_body").load("admin.php",{id_reparacion:$(this).children('td').html()});
		$('#modal_emergente').modal('show');
	}
	else
	{
		$("#modal_body").load("admin.php",{id_cliente:$(this).children('td').html()});
		$('#modal_emergente').modal('show');
	}
	return false;
});
$("#nuevocliente").on('submit','#form_nuevocli',function() 
{
	$.ajax({
		type: "POST",
		url: "admin.php",
		data:$("#form_nuevocli").serialize(),
		success: function(data)
		{
			$('#nuevocliente').html('<br><br><br><div class="container"><div class="row"><div class="col-lg-12 alert alert-success fade in" id="alerta_cli_agregado"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Cliente agregado exitosamente.</div></div></div>')
			
		}
	});
	return false;
});
$('#nuevocliente').on('closed.bs.alert','#alerta_cli_agregado', function () {
	$.ajax({
		type: "POST",
		url: "admin.php",
		data: "nuevocli=true",
		success: function(data)
		{
			$("#nuevocliente").html(data);
		}
	});
});
$('#logout').click(function() {
	$.ajax({
		type: "POST",
		url: "logout.php",
		success: function(data)
		{
			window.location = "login.php";
		}
	});
	return false;
});
