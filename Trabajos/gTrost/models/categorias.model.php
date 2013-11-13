<?php

class Categorias extends Model {

	public function getCat() {
		$categorias_array = array();

		$sql_query= 'SELECT DISTINCT cat_nombre FROM sub_categorias';

		$STH = $this->conn->query($sql_query);  
		$STH->setFetchMode(PDO::FETCH_ASSOC); 

		while($row = $STH->fetch()) {  
					    
			    $categorias_array[] = $row;
			} 

		return $categorias_array;
		 
	}

	public function getSubCat($categoria) {
		// Obtiene todas las subcategorías, divididas por categoría principal
		$subcat_array = array();

		$sql_query= "SELECT * FROM sub_categorias WHERE cat_nombre='" .  $categoria . "'" ;

		$STH = $this->conn->query($sql_query);  
		$STH->setFetchMode(PDO::FETCH_ASSOC); 

		while($row = $STH->fetch()) {  
				
				
			    $subcat_array[] = $row;
			} 

		return $subcat_array;

	}

	public function getAllSub() {
		// Obtiene todas las subcategorías, sin división alguna (para el panel de admin)
		$subcategorias_array = array();

		$sql_query= 'SELECT DISTINCT subcat_nombre FROM sub_categorias';

		$STH = $this->conn->query($sql_query);  
		$STH->setFetchMode(PDO::FETCH_ASSOC); 

		while($row = $STH->fetch()) {  
					    
			    $subcategorias_array[] = $row;
			} 

		return $subcategorias_array;

	}

	public function getAllCat() {
		// Obtiene todas las categorías, tengan o no subcat relacionadas
		$categorias_array = array();

		$sql_query = 'SELECT DISTINCT cat_nombre FROM categorias';

		$STH = $this->conn->query($sql_query);  
		$STH->setFetchMode(PDO::FETCH_ASSOC); 

		while($row = $STH->fetch()) {  
					    
			    $categorias_array[] = $row;
			} 

		return $categorias_array;

	}
}
