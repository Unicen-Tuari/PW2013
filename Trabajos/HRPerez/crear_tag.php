<?php
  include './controllers/controller_crear_tag.php';
  include './views/view_crear_tag.php';
  include './models/model_crear_tag.php';

  $model = new Model();
  $view = new View();
  $controller = new Controller($model,$view);
  
  if (isset ($_POST['nombre_tag'])) 
    {
        $tag["nombre_tag"] = $_POST["nombre_tag"];
        $tag["descripcion"] = $_POST["descripcion"];
    
    $controller->CrearTags($tag);
    }
  else
    { 
        $controller->imprimirPagina();

    }

?>
