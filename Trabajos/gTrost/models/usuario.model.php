<?php

class Usuario extends Model {

	public function checkUserMail($user_mail) {

	}

	public function getUserPass($user_mail){

		$user_array = array();
		$sql_query = "SELECT usuario_pass, usuario_nombre FROM usuarios where usuario_mail = '" . $user_mail . "'";

		$STH = $this->conn->query($sql_query);  
		$STH->setFetchMode(PDO::FETCH_ASSOC); 

		while($row = $STH->fetch()) {  
				
			    $user_array['usuario_pass'] = $row['usuario_pass'];
			    $user_array['usuario_nombre'] = $row['usuario_nombre'];
			    
			} 

		return $user_array;
	}
}