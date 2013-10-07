<?php
$nombre = $_GET["nombre"];

$data = array('nombre'=>'No Nombre', 'Apellido' => 'No Apellido','Email'=>'No Email');
switch ($nombre) {
    case 'Juan':
        $data = array('nombre'=>'Juan', 'Apellido' => 'Perez','Email'=>'juan@gmail.com');
        break;
    case 'Mercedes':
        $data = array('nombre'=>'Mercedes', 'Apellido' => 'Gomez','Email'=>'merchu@hotmail.com');
        break;
    case 'Roberto':
        $data = array('nombre'=>'Roberto', 'Apellido' => 'Bertucci','Email'=>'rob@hotmail.com');
        break;
    default :
    	
    	break;
}

echo json_encode($data);
        

?>