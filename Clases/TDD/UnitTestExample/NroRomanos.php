<?php

class NroRomanos
{

	function convertNro($nro)
	{	
		if ($nro == 5) {
			return "V";
		} else if ($nro % 10 == 0) {
			$aux = $nro / 10;
			return str_repeat("X", $aux);
		}else if (($nro % 10 )+6 == 0){
			return "VI";
		}
		else {
			$i = $nro;
			$result = "";
			while($i > 0) {
				$result .= "I";
				$i--;
			}
			return $result;
		}
	}
}
?>