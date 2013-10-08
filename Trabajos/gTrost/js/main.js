$( document ).ready(function() {
	$( "#searchform" ).submit(function( event ) {

		var keyword = $('#search_kw').val();

		$.post( "/search", { 'search_kw': keyword })
		  .done(function( data ) {
		    $(".f_index_productos").html(data);
		  });

	  event.preventDefault();
	});	
});

