$("#adminlogout").on("click",function() {
	$.ajax({
		type: "POST",
		url: "logout.php",
		data:$("#formlogin").serialize(),
		success: function(data){
				   window.location = "../index.php";
		}
	});
	return false;
});

$("#formlogin").on("submit",function() {
	$.ajax({
		type: "POST",
		url: "login.php",
		data:$("#formlogin").serialize(),
		success: function(data){
			if(data.indexOf("Error")== -1){
				window.location = data;
			}
			else{
				$( "#error" ).text(data);
				$( "#error" ).show();
			}
		}
	});
 	return false;
});

$("#logout").on("click",function() {
	$.ajax({
		type: "POST",
		url: "logout.php",
		data:$("#formlogin").serialize(),
		success: function(data){
				   window.location = data;
		}
	});
	return false;
});

$("#adminlogout").on("click",function() {
	$.ajax({
		type: "POST",
		url: "logout.php",
		data:$("#formlogin").serialize(),
		success: function(data){
				   window.location = "../index.php";
		}
	});
	return false;
});