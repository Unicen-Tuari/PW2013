<?php

class signup extends Model {

	public function cargarUsuario($user_array){

		
		$STH = $this->conn->prepare("INSERT INTO usuarios (usuario_nombre, usuario_mail, usuario_pass, usuario_direccion, 
													usuario_ciudad, usuario_provincia, usuario_codigopostal) 
									VALUES (:usuario_nombre, :usuario_mail, :usuario_pass, :usuario_direccion, 
													:usuario_ciudad, :usuario_provincia, :usuario_codigopostal)");

		$STH->bindParam(':usuario_nombre', $user_array['usuario_nombre']);
		$STH->bindParam(':usuario_mail', $user_array['usuario_mail']);
		$STH->bindParam(':usuario_pass', $user_array['usuario_pass1']);
		$STH->bindParam(':usuario_direccion', $user_array['usuario_direccion']);
		$STH->bindParam(':usuario_ciudad', $user_array['usuario_ciudad']);
		$STH->bindParam(':usuario_provincia', $user_array['usuario_provincia']);
		$STH->bindParam(':usuario_codigopostal', $user_array['usuario_codigopostal']);
		
		
		$STH->execute();

	}

}

