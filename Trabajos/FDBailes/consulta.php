<?php
	require('./libs/Smarty.class.php');
	$smarty = new Smarty;
	$smarty->caching = false;
	include ('variables.php');
	try {
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	}
	catch(PDOException $pe)
	{
		die('Error de conexion, Mensaje: '.$pe->getMessage());
	}
	if (isset($_POST['dni'])){
		$dni = $_POST['dni'];
		$sql = "SELECT r.*,e.nombre_estado,DATE_FORMAT(r.fecha_inicio,'%d/%m/%Y') as fecha_inicio_f,DATE_FORMAT(r.fecha_fin,'%d/%m/%Y') as fecha_fin_f FROM REPARACION r,ESTADO e WHERE dni = $dni AND e.id_estado=r.id_estado ORDER BY fecha_inicio DESC LIMIT 3;"; 
		$var1 = $conn->prepare($sql);
		$var1->execute();
		if(!$var1) {
			die(print($conn->errorInfo()[2]));
		}
		else {
			$datos_rep = $var1->fetchAll(PDO::FETCH_ASSOC);
			if ($var1->rowCount()==0) {
				$datos_rep=null;
				$datos_img=null;
			}
			else {
				$datos_img=$datos_rep[0];
				$sql="SELECT link_imagen FROM IMAGEN_REPARACION WHERE id_reparacion = ".$datos_img['id_reparacion'].";";
				$var2 = $conn->prepare($sql);
				$var2->execute();
				if(!$var2) {
					die(print($conn->errorInfo()[2]));
				}
				else {
					$datos_img = $var2->fetchAll(PDO::FETCH_ASSOC);
					if ($var2->rowCount()==0) {
						$datos_img=null;
					}
				}
			}
		}
		$smarty->assign("reparaciones",$datos_rep);
		$smarty->assign("imagenes",$datos_img);
	}
	$smarty->display('consulta.tpl');
?>