<?php
//Configuración
$host 	= "localhost";
$db	= "web";
$user	= "root";
$pass	= "";

//Conexión
try{

$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' -$pe->getMessage());
}
//Consulta
				$sql = "SELECT m.nombremateria,c.nombrecarrera,n.estadomateria,n.nota
						FROM notas n
						JOIN materia m ON ( m.idmateria = n.idmateria ) 
						JOIN carrera c ON ( c.idcarrera = n.idcarrera ) 
						";
//Ejecucion
				$q	 = $conn->query($sql);
				if(!$q)
				{
					die("Error al ejecutar una consulta, Mensaje: ". $conn->errorInfo());
				}
				
				while($r = $q->fetch()){
					print ("  
					 <tbody>
					 <tr>
					 <td>$r[0]</td>;
					 <td>$r[1]</td>;
					 <td>$r[2]</td>;
					 <td>$r[3]</td>;
					 </tr>
					 </tbody>
					 ");
			}
?>