<?php
// -- Bootstrap
	require_once('libs/Swift/lib/swift_required.php');

function __autoload($class_name) {
    $filename = "models/" . $class_name . ".model.php";

    if (is_readable($filename)) {
        require $filename;
    }
    
}
spl_autoload_register("__autoload");

	require('libs/router.class.php');
	require('models/model.php');
	require('views/view.php');	
	require('controllers/controller.php');	



// -- Application
	
	$session = new Session();

	$view = new View();
	$controller = new FrontController($view);

?>