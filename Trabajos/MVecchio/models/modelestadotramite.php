<?php
    class Model{ 
        private $conn;

        public function __construct()
        {
            include ('./conexion.php');
            try
            {
                $this->conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
            }
            catch(PDOException $pe)
            {
                die('Error de conexion, Mensaje: ' .$pe->getMessage());
            }
        }
        
        public function buscarTramites($id_cliente){
            $sql = "SELECT c.id_cliente,t.fecha_inicio,t.estado,t.id_tramite,tt.valor,tt.id_tramite,tt.nombre,a.id_cliente,a.marca,a.modelo,a.id_automotor FROM cliente c,tramite t, tipo_tramite tt, automotor a WHERE c.id_cliente=$id_cliente AND c.id_cliente=t.id_cliente AND t.id_tramite=tt.id_tramite AND c.id_cliente=a.id_cliente";
            $query = $this->conn->prepare($sql);
            $query->execute();
            
            return $query->fetchAll();
        }
    }
?>