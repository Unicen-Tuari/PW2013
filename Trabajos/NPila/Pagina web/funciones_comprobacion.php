<?php

function comprobar_nombre($nombre)
	{
		if (ereg("^[a-zA-Z ]{3,40}$", $nombre))
			{
				return true;
			}
		else
			{
				return false;
			}
	} 

function comprobar_dni($numero)
	{
		if (ereg("^[0-9]{7,8}$", $numero))
			{
				return true;
			}
		else
			{
				return false;
			}
	} 

function comprobar_localidad($localidad)
	{
		if (ereg("^[a-zA-Z0-9 ]{4,20}$", $localidad))
			{
				return true;
			}
		else
			{
				return false;
			}
	} 

function comprobar_calle($calle)
	{
		if (ereg("^[a-zA-Z0-9 ]{2,50}$", $calle))
			{
				return true;
			}
		else
			{
				return false;
			}
	} 

function comprobar_num($numero)
	{
		if (ereg("^[0-9]{1,4}$", $numero))
			{
				return true;
			}
		else
			{
				return false;
			}
	}

function comprobar_cp($numero)
	{
		if (ereg("^[0-9]{4,4}$", $numero))
			{
				return true;
			}
		else
			{
				return false;
			}
	}

function comprobar_telf($numero)
	{
		if (ereg("^[0-9]{6,12}$", $numero))
			{
				return true;
			}
		else
			{
				return false;
			}
	}

function comprobar_tel($numero)
	{
		if (ereg("^[0-9]{0,12}$", $numero))
			{
				return true;
			}
		else
			{
				return false;
			}
	}

function comprobar_fecha($fecha)
	{
		if (ereg("^[0-9/]{10,10}$", $fecha))
			{
				return true;
			}
		else
			{
				return false;
			}
	}

function comprobar_hora($hora)
	{
		if (ereg("^[0-9:]{5,5}$", $hora))
			{
				return true;
			}
		else
			{
				return false;
			}
	}

function comprobar_numero_afiliado($numero_afiliado)
	{
		if (ereg("^[A-Z0-9/-]{0,15}$", $numero_afiliado))
			{
				return true;
			}
		else
			{
				return false;
			}
	}

function comprobar_email($email){
    $mail_correcto = 0;
    //compruebo unas cosas primeras
    if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){
       if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) {
          //miro si tiene caracter .
          if (substr_count($email,".")>= 1){
             //obtengo la terminacion del dominio
             $term_dom = substr(strrchr ($email, '.'),1);
             //compruebo que la terminación del dominio sea correcta
             if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
                //compruebo que lo de antes del dominio sea correcto
                $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
                $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
                if ($caracter_ult != "@" && $caracter_ult != "."){
                   $mail_correcto = 1;
                }
             }
          }
       }
    }
    if ($mail_correcto)
		//bien       
		return true;
    else
		//mal
       return false;
} 
?>
