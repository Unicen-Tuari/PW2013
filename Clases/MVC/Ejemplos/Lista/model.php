<?php
class Model
{
    public $listaNombresPersonas;
	public $listaApellidosPersonas;
 
    public function __construct(){
        $this->listaNombresPersonas = array("Juan","Esther","Santiago","Teresa");
		$this->listaApellidosPersonas = array("Perez","Psicores","Rodriguez","Estevanez");
    }
}
?>