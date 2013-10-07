<?php
$nombre = $_POST["nombre"];
sleep(5);

switch ($nombre) {
    case 'Juan':
        echo "juan@gmail.com";
        break;
    case 'Mercedes':
        echo "merchu@hotmail.com";
        break;
    case 'Roberto':
        echo "robert@redford.com.ar";
        break;
    default :
    	echo "No Email";
    	break;
}
?>