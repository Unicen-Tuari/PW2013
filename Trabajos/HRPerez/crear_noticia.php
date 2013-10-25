<?php
	include './controllers/controller_crear_noticia.php';
	include './views/view_crear_noticia.php';
	include './models/model_crear_noticia.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model,$view);
	
	if (isset ($_POST['titulo'])) 
		{
				$noticia["titulo"] = $_POST["titulo"];
				$noticia["subtitulo"] = $_POST["subtitulo"];
				$noticia["cuerpo"] = $_POST["cuerpo"];
				$noticia["id_tag"] = $_POST["id_tag"];
				$noticia["id_seccion"] = $_POST["id_seccion"];
		
		$controller->CrearNoticia($noticia);
		}
	else
		{ 
	  		$controller->imprimirPagina();

		}

?>
