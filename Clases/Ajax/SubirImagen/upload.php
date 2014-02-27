<?php
$allowed =  array('gif','png' ,'jpg');
if(isset($_FILES['imageFile']))
{
	if(!$_FILES['imageFile']['error'])
	{
		$filename = $_FILES['imageFile']['name'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		if(in_array($ext,$allowed) ) {
			$new_file_name = uniqid(); //Generar un uniq id para la foto.
			move_uploaded_file($_FILES['imageFile']['tmp_name'], 'images/'.$new_file_name.'.'.$ext);
			echo 'Congratulations!  Your image was uploaded.';
		}
		else
		{
			echo 'Error: Invalid Extension';
		}
	}
	else
	{
		echo 'Error: Fatal Error';
	}
}

?>