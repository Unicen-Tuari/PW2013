$("#grabarAuto").click(function() {

	$.ajax({
	  type: "POST",
	  url: "index.php",
	  data:$("#formAuto").serialize(),
	  success: function(data)
			   {
				   alert(data);
				   if(data.indexOf("Error")== -1)
				   {
				    	$("#formAuto").find('input:text, input:password, input:file, select, textarea').val('');
					}
			   }
	});
 
	return false;
});
