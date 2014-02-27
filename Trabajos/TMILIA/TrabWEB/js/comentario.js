$("#comentario").click(function() {

	$.ajax({
	  type: "POST",
	  url: "grabarcoment.php",
	  data:$("#coment").serialize(),
	  success: function(data)
			 {
			 	

			 	$("#comentarios").append(data);
				$("#coment").find('input:text, input:password, input:file, select, textarea').val('');
				
			 }
	});
 
	return false;
});