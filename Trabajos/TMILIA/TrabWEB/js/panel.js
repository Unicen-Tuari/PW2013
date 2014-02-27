$("#logout").click(function() {

	$.ajax({
	  type: "POST",
	  url: "logout.php",
	  data:$("#formlogin").serialize(),
	  success: function(data)
			   {
				   window.location = "index.php";
				}
	});
 
	return false;
});