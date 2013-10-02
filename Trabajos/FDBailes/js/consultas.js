function busquedaIDcliente()
{
	$('#input_principal').val('');
	$('#input_principal').attr('placeholder','ID Cliente');
	$('#input_secundario').slideUp(200);
	$('#input_secundario').prop('required',false);
}
function busquedaNA()
{
	$('#input_principal').val('');
	$('#input_secundario').val('');
	$('#input_principal').attr('placeholder','Nombre');
	$('#input_secundario').slideDown(200);
	$('#input_secundario').attr('placeholder','Apellido');
	$('#input_secundario').prop('required',true);
}
function busquedaID()
{
	$('#input_principal').val('');
	$('#input_principal').attr('placeholder','ID Reparación');
	$('#input_secundario').slideUp(200);
	$('#input_secundario').prop('required',false);
}
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
			      $('[data-spy="scroll"]').each(function () {
  					var $spy = $(this).scrollspy('refresh');
			      })
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
// 		$("#tablareparaciones").load("admin.php",{rep:true});
// 		$('a[href=#tablareparaciones]').tab('show');
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
// 	$("#tablareparaciones").load("admin.php",{rep:true});
// 	$('a[href=#tablareparaciones]').tab('show');
	return false;
}
);
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
// 	$("#tablaclientes").load("admin.php",{cli:true});
// 	$('a[href=#tablaclientes]').tab('show');
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
// 	$("#buscar").load("admin.php",{buscar:true});
// 	$('a[href=#buscar]').tab('show');
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
	// 	$("#buscar").load("admin.php",{buscar:true});
	// 	$('a[href=#buscar]').tab('show');
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
	// 	$("#buscar").load("admin.php",{buscar:true});
	// 	$('a[href=#buscar]').tab('show');
	return false;
});
$('#tablareparaciones').on('click','table tbody tr',function() 
{
// 	$.ajax({
// 		type: "POST",
// 		url: "admin.php",
// 		data: {id:$(this).children('td').html()},
// 		success: function(data)
// 		{
// 			$("modal_body").html(data);
// 			$('#pepe').modal('show');
// 		}
// 	});
	$("#modal_body").load("admin.php",{id_reparacion:$(this).children('td').html()});
	$('#modal_emergente').modal('show');
return false;
});
$('#tablaclientes').on('click','table tbody tr',function() 
{
	// 	$.ajax({
	// 		type: "POST",
	// 		url: "admin.php",
	// 		data: {id:$(this).children('td').html()},
	// 		success: function(data)
	// 		{
	// 			$("modal_body").html(data);
	// 			$('#pepe').modal('show');
	// 		}
	// 	});
	$("#modal_body").load("admin.php",{id_cliente:$(this).children('td').html()});
	$('#modal_emergente').modal('show');
	return false;
});
$('#buscar').on('click','table tbody tr',function() 
{
	// 	$.ajax({
	// 		type: "POST",
	// 		url: "admin.php",
	// 		data: {id:$(this).children('td').html()},
	// 		success: function(data)
	// 		{
	// 			$("modal_body").html(data);
	// 			$('#pepe').modal('show');
	// 		}
	// 	});
	if($(this).children('td').length == 4)
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