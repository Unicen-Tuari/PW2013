<?php

class Model
{
    private $conn;
    
    	public function __construct(){

		include('./conexion.php');
	}

    public function insertarNoticia($noticia){

		$sql = "INSERT INTO `noticia` (`titulo`,`subtitulo`,`cuerpo`, `id_tag`, `id_seccion`) VALUES ('$titulo', '$subtitulo','$cuerpo','$id_tag','$id_seccion')";
		
			$resultado = $this->conn->prepare($sql);
			$resultado->execute(array(':titulo'=>$titulo,':subtitulo'=>$subtitulo,':cuerpo'=>$cuerpo,':id_tag'=>$id_tag,':id_seccion'=>$id_seccion));
			if(!$resultado){
				die(print($this->conn->errorInfo()[2]));
			}
			$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
			return $resultado;
	}
		
}


public function insertarAuto($auto) //,$mail
	{
		//$id_usuario = "SELECT id FROM usuario WHERE email = $mail";
		$id_usuario= 1;
		//$marca = 6;

		//echo "hola";


		//$sql = "INSERT INTO `autosbd`.`auto` (`id`, `id_usuario`, `id_marca`, `titulo`, `valor`, `descripcion`, `modelo`, `anio`) VALUES (NULL, '$id_usuario', \\'$auto['marca']\\', 'tomi', '123123', 'asdasdas', 'asasd', '123123')";
		$sql = "INSERT INTO `autosbd`.`auto` (`id_usuario`, `id_marca`, `titulo`, `valor`, `descripcion`, `modelo`, `anio`)  VALUES (:id_usuario,:marca,:titulo,:valor,:descripcion,:modelo,:anio)";
		$q = $this->conn->prepare($sql);
		//$q->execute();
		$a=$q->execute(array(':id_usuario'=>$id_usuario, ':marca'=>$auto["marca"], ':titulo'=>$auto["titulo"] ,':valor'=>$auto["valor"] ,':descripcion'=>$auto["descripcion"] ,':modelo'=>$auto["modelo"] ,':anio'=>$auto["anio"] ));
	 //print_r($q);
	}
?>




