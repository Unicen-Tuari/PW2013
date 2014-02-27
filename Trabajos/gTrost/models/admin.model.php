<?php

class Admin extends Model {

	public function CargarProducto($producto_array){
	
		
		$STH = $this->conn->prepare("INSERT INTO productos (producto_nombre, subcat_nombre, precio, descripcion, imagenes) VALUES (:prod_nombre, :prod_subcategoria, :prod_precio, :prod_info, :prod_img)");

		$STH->bindParam(':prod_nombre', $producto_array['prod_nombre']);
		$STH->bindParam(':prod_subcategoria', $producto_array['prod_subcategoria']);
		$STH->bindParam(':prod_precio', $producto_array['prod_precio']);
		$STH->bindParam(':prod_info', $producto_array['prod_info']);
		$STH->bindParam(':prod_img', $producto_array['prod_img']);

		$STH->execute();
		

	}

	public function BorrarProducto($producto_id){

		$STH = $this->conn->prepare("DELETE FROM productos WHERE producto_id= :producto_id");
		$STH->bindParam(':producto_id', $producto_id);

		$STH->execute();		
	}

	public function CargarSubCat($subcat_array){
		$STH = $this->conn->prepare("INSERT INTO sub_categorias (subcat_nombre, cat_nombre) VALUES (:subcat_nombre, :cat_nombre)");

		$STH->bindParam(':subcat_nombre', $subcat_array['subcat_nombre']);
		$STH->bindParam(':cat_nombre', $subcat_array['cat_nombre']);

		$STH->execute();

	}

	public function CargarCat($cat_nombre){
		$STH = $this->conn->prepare("INSERT INTO categorias (cat_nombre) VALUES (:cat_nombre)");

		$STH->bindParam(':cat_nombre', $cat_nombre);

		$STH->execute();
	}

	public function BorrarCat($cat_nombre){

		$STH = $this->conn->prepare("DELETE FROM categorias WHERE cat_nombre= :cat_nombre");
		$STH->bindParam(':cat_nombre', $cat_nombre);

		$STH->execute();
	}

	public function BorrarSubCat($subcat_nombre){

		$STH = $this->conn->prepare("DELETE FROM sub_categorias WHERE subcat_nombre= :subcat_nombre");
		$STH->bindParam(':subcat_nombre', $subcat_nombre);

		$STH->execute();
	}
}