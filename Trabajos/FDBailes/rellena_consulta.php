<?php
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
		$sql = "SELECT r.*,e.nombre_estado,DATE_FORMAT(r.fecha_inicio,'%d/%m/%Y') as fecha_inicio_f,DATE_FORMAT(r.fecha_fin,'%d/%m/%Y') as fecha_fin_f FROM REPARACION r,ESTADO e WHERE dni = $dni AND e.id_estado=r.id_estado ORDER BY fecha_inicio DESC LIMIT 3"; 
		$var1 = $conn->query($sql);
		if(!$var1) {
			die(print($conn->errorInfo()[2]));
		}
		else {
			$datos_rep = $var1->fetch(PDO::FETCH_ASSOC);
			if (!$datos_rep) {
				print ('No hay ninguna reparación asociada al numero de documento ingresado.');
				print('<br><br><br>');
			}
			else {
				if (is_null($datos_rep['fecha_fin_f'])) {
					$datos_rep['fecha_fin_f'] = '-';
				}
				print('Articulo: <input type="text" name="articulo" value="'.$datos_rep['articulo'].'" readonly> Marca: <input type="text" name="marca" value="'.$datos_rep['marca'].'" readonly> Modelo: <input type="text" name="modelo" value="'.$datos_rep['modelo'].'" readonly><br><br><br>Nro. de serie: <input type="text" name="serie" value="'.$datos_rep['numero_serie'].'" readonly> Fecha presentado: <input type="text" name="fecha_ini" value="'.$datos_rep['fecha_inicio_f'].'" readonly> Fecha finalizado: <input type="text" name="fecha_fin" value="'.$datos_rep['fecha_fin_f'].'" readonly><br><br><br>Estado reparación: <input type="text" name="estado" value="'.$datos_rep['nombre_estado'].'" readonly> Precio reparación: <input type="text" name="precio" value="$ '.$datos_rep['precio_reparacion'].'" readonly><br><br><br>');
			}
		}
	}
	else {
		print('Articulo: <input type="text" name="articulo" readonly> Marca: <input type="text" name="marca" readonly> Modelo: <input type="text" name="modelo" readonly><br><br><br>
					Nro. de serie: <input type="text" name="serie" readonly> Fecha presentado: <input type="text" name="fecha_ini" readonly> Fecha finalizado: <input type="text" name="fecha_fin" readonly><br><br><br>
					Estado reparación: <input type="text" name="estado" readonly> Precio reparación: <input type="text" name="precio" readonly><br><br><br>');
	}
?>