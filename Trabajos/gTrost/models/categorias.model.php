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
		$subcat_array = array();

		$sql_query= "SELECT * FROM sub_categorias WHERE cat_nombre='" .  $categoria . "'" ;

		$STH = $this->conn->query($sql_query);  
		$STH->setFetchMode(PDO::FETCH_ASSOC); 

		while($row = $STH->fetch()) {  
				
				
			    $subcat_array[] = $row;
			} 

		return $subcat_array;

	}
}