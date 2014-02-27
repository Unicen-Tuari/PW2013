$( document ).ready(function() {


	$( "#searchform" ).submit(function( event ) {

		var keyword = $('#search_kw').val();

		$.post( "/search", { 'search_kw': keyword })
		  .done(function( data ) {
		    $(".productos_container").html(data);
		  });

	  event.preventDefault();
	});	

	$("#login").click(function() {
			$("#f_login").slideDown("slow");

	});

	$(".login-close").click(function() {
		$("#f_login").slideUp("slow");
	});

	
    $("#tooltip1").tooltip({ placement: 'left'});

	$(".item_foto").click(function() { 
		var nueva_foto = $(this).attr('src');
		$("#foto_principal").attr('src', nueva_foto);
	});

});

function validateSignUp() { 
	var pass1 = $("#usuario_pass1").val();
	var pass2 = $("#usuario_pass2").val();

	if(pass1==pass2) {
		$("#pass_error").hide();
		return true;

	} else {
		$("#pass_error").slideDown("slow");
		return false;

	}
	
}