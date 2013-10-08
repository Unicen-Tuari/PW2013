<?php

function __autoload($class_name) {
    $filename = "models/" . $class_name . ".model.php";

    if (is_readable($filename)) {
        require $filename;
    }
    
}
spl_autoload_register("__autoload");

// -- Bootstrap
	require('models/model.php');
	require('views/view.php');	
	require('controllers/controller.php');	

	

// -- Application
	$view = new View();
	$controller = new FrontController($view);

?>