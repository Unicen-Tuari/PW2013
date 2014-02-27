 // wait for the DOM to be loaded 
        $(document).ready(function() { 
		 var options = { 
				complete: function(response) 
				{
					if(response.responseText.indexOf("Error")!= -1)
						$("#message").html("<font color='red'>"+response.responseText+"</font>");
					else
					{
						$("#message").html("<font color='green'>"+response.responseText+"</font>");
						$("#imageForm").find('input:text, input:password, input:file, select, textarea').val('');
					}
				}
			};
			
            $('#imageForm').ajaxForm(options); 
        }); 