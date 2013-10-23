<?php
	include './controllers/controller_cargar_noticia.php';
	include './views/view_cargar_noticia.php';
	include './models/model_cargar_noticia.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model,$view);
	$view->imprimirPagina();

if (isset ($_POST['titulo'])) 
	{
			$noticia["titulo"] = $_POST["titulo"];
			$noticia["subtitulo"] = $_POST["subtitulo"];
			$noticia["cuerpo"] = $_POST["cuerpo"];
			$noticia["id_tag"] = $_POST["id_tag"];
			$noticia["id_seccion"] = $_POST["id_seccion"];
	}
	$controller->cargarNoticia($noticia);
else
	{ 
  		$controller->imprimirPagina();

	}

?>
