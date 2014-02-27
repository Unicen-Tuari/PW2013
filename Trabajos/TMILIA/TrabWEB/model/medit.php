<?php
class Modeledit
{
	private $host = "localhost";
	private $db = "autosBD";
	private $user = "root";
	private $pass = "";
	private $conn;
    
	
    public function __construct(){
        try{
			$this->conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass);
		}
		catch(PDOException $pe){
			die('Error de conexion, Mensaje: '.$pe->getMessage());
		}
    }

    

	
	public function consultaAuto($id_auto)
	{

		$sql = "SELECT  id_marca, titulo, valor, descripcion, modelo, anio
				FROM auto 
				
				WHERE id = $id_auto ";

				$sql = "SELECT a.id, a.id_marca, a.titulo, a.valor, a.descripcion, a.modelo, a.anio, m.nombre
				FROM auto a
				INNER JOIN marca m ON ( m.id = a.id_marca ) 
				WHERE a.id =$id_auto";
		$q = $this->conn->prepare($sql);
		$q->execute();
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}

	public function consultaMarca()
	{

		$sql = "SELECT * FROM marca";
		$q = $this->conn->prepare($sql);
		$q->execute();
		return $q->fetchAll(PDO::FETCH_ASSOC);
	}


	public function insertarEdicion($auto,$pepito){

    	$sql= "UPDATE `auto` SET titulo = '".$auto['titulo']."' ,
    			valor = '".$auto['valor']."' ,
    			modelo = '".$auto['modelo']."' ,
    			anio = '".$auto['anio']."' ,
    			descripcion = '".$auto['descripcion']."' 
    			WHERE id =".$pepito;

						
			$q = $this->conn->prepare($sql);
         	$q->execute(array(':titulo'=>$auto["titulo"] ,':valor'=>$auto["valor"] ,':modelo'=>$auto["modelo"] ,':anio'=>$auto["anio"],':descripcion'=>$auto["descripcion"] ));
			
			$a=$q->fetch(PDO::FETCH_ASSOC);
			return $q;
	}






	public function insertarAuto($auto,$id_user) 
	{
		$id_usuario= $id_user; //$id_user

		$sql = "INSERT INTO `autosbd`.`auto` (`id_usuario`, `id_marca`, `titulo`, `valor`, `descripcion`, `modelo`, `anio`)  VALUES (:id_usuario,:marca,:titulo,:valor,:descripcion,:modelo,:anio)";
		$q = $this->conn->prepare($sql);
		$a=$q->execute(array(':id_usuario'=>$id_usuario, ':marca'=>$auto["marca"], ':titulo'=>$auto["titulo"] ,':valor'=>$auto["valor"] ,':descripcion'=>$auto["descripcion"] ,':modelo'=>$auto["modelo"] ,':anio'=>$auto["anio"] ));
		
		//mysql_query("INSERT INTO `auto` (:id_usuario,:marca,:titulo,:valor,:descripcion,:modelo,:anio) )";

		$id_auto = $this->conn->lastInsertId();
		//mysql_insert_id();


		//for ($i=0; $i <count($_FILES) ; $i++) { 
			# code...
		//}
		$id_imagen = $this->insertarImagen($auto["imagen"]);

		$sql = "INSERT INTO  `autosbd`.`auto_imagen` (`id_auto` ,`id_imagen`) VALUES ( :id_auto, :id_imagen)";
		$q = $this->conn->prepare($sql);
		$a=$q->execute(array(':id_auto'=>$id_auto,':id_imagen'=>$id_imagen));
		
	

	}

	public function insertarImagen($imagen)
	{

		$allowed =  array('gif','png' ,'jpg','jpeg');
		if(!$imagen['error'])
			{
				$filename = $imagen['name'];
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				if(in_array($ext,$allowed) ) {
					$new_file_name = uniqid(); //Generar un uniq id para la foto.
					$path = 'imagenes/'.$new_file_name.'.'.$ext;
					move_uploaded_file($imagen['tmp_name'],$path );
					//echo 'Congratulations!  Your image was uploaded.';


					$sql = "INSERT INTO `autosbd`.`imagen` (`path`)  VALUES (:path)";
					


					$q = $this->conn->prepare($sql);
					$arreglo = array(':path'=>$path);
					$a=$q->execute($arreglo);
					$id_imagen = $this->conn->lastInsertId();
					//print_r($id_imagen);
					return $id_imagen;
					
				}
				else
				{
					echo 'Error: Invalid Extension';
				}
			}
			else
			{
				echo 'Error: Fatal Error';
			}
		
		

		
	}
}
?>

