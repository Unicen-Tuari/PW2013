<?php

function comprobar_cadena($cadena){ 
   //compruebo que el tamaño del string sea válido. 
   if (strlen($cadena)<5 || strlen($cadena)>20){  
      return false; 
   } 

   //compruebo que los caracteres sean los permitidos 
   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_"; 
   for ($i=0; $i<strlen($cadena); $i++){ 
      if (strpos($permitidos, substr($cadena,$i,1))===false){ 
         return false; 
      } 
   }  
   return true; 
}

function existe_usr($nombre){

include('conn.php');

$sql = ("SELECT * 
FROM  `usuarios` 
WHERE username =  '".$nombre."'");

$existe = mysql_query($sql, $conn) or die(mysql_error());
if(!$existe)
{
  die("No se ha podido conectar con la base de datos". $conn->errorInfo());
}

if (mysql_num_rows($existe) > 0) {
    return true;
    } else{
        return false;
    }

mysql_close($conn);
}

function existe_mail($mail){

include('conn.php');

$sql = ("SELECT * 
FROM  `usuarios` 
WHERE mail =  '".$mail."'");

$existe = mysql_query($sql, $conn) or die(mysql_error());
if(!$existe)
{
  die("No se ha podido conectar con la base de datos". $conn->errorInfo());
}

if (mysql_num_rows($existe) > 0) {
    return true;
    } else{
        return false;
    }

mysql_close($conn);
}

require_once('recaptcha/recaptchalib.php');
$captcha_publickey = "6LeGQeQSAAAAAGdM2uFeBv2LBaIDqUbC039TkD80";
$captcha_privatekey = "6LeGQeQSAAAAABxqzS1ngW9pxCjiJrpdSxOvnHri";

function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

include('conn.php');
$captcha_respuesta = recaptcha_check_answer ($captcha_privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);

if(isset($_POST['boton'])){
        if (!comprobar_cadena($_POST['nombre'])){
            header('Location: index.php?error=1');
        }else if (!comprobar_cadena($_POST['username'])){
            header('Location: index.php?error=2');
        }else if (existe_usr($_POST['username'])) {
            header('Location: index.php?error=7');
        }else if (!comprobar_cadena($_POST['password'])){
            header('Location: index.php?error=3');
        }else if($_POST['password'] <> $_POST['passwordc']){
            header('Location: index.php?error=4');
        }else if (existe_mail($_POST['email'])) {
            header('Location: index.php?error=8');
        }else if(($_POST['email'] == '') OR (!preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])) OR (!spamcheck($_POST['email']))){
            header('Location: index.php?error=5');
        }else if($_POST['mayoredad'] == 'False'){
           header('Location: index.php?error=6');
        }else if (!$captcha_respuesta->is_valid) {
           header('Location: index.php?error=10');
        } else {
 
            foreach($_POST AS $key => $value) {
                $_POST[$key] = mysql_real_escape_string($value);
            } 

            $sql = "SELECT MAX(ID) as ID
        FROM usuarios";

      $max_id = mysql_query($sql, $conn) or die(mysql_error());
      if(!$max_id)
      {
        die("No se ha podido conectar con la base de datos". $conn->errorInfo());
      }
      $consulta = mysql_fetch_assoc($max_id);
      $ID = $consulta['ID'];
      $ID ++;
      $aleatorio = uniqid('',FALSE);
      $date = date("Y-m-d");

      $insert = "INSERT INTO usuarios (ID,FechaInicio,Nombre,Username,Password,Mail,codactivacion,activado,baneado) ";
      $insert.= "VALUES ('".$ID."','".$date."','".$_POST['nombre']."','".$_POST['username']."','".$_POST['password']."','".$_POST['email']."','".$aleatorio."','0','0') ";
      $result = mysql_query($insert, $conn) or die(mysql_error());

      $nombre = $_POST['nombre'];
      $usuario = $_POST['username'];
      $contraseña =  $_POST['password'];
      $correo = $_POST['email'];

      require("PHPMailer/class.phpmailer.php");
      require("PHPMailer/class.smtp.php");
       
      //Especificamos los datos y configuración del servidor
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = "ssl";
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 465;
       
      //Nos autenticamos con nuestras credenciales en el servidor de correo Gmail
      $mail->Username = "broms.web@gmail.com";
      $mail->Password = "bender36217598";
       
      //Agregamos la información que el correo requiere
      $mail->From = "broms.web@gmail.com";
      $mail->FromName = "Augusto, Creador de Brom's";
      $mail->Subject =  utf8_encode("Activación de tu cuenta en broms.com.ar");
      $mail->AltBody = "";
      $mail->MsgHTML(
      "Registro en broms.com<br>
      Gracias por registrarse en Broms,actva tu cuenta y podras postear y comentar!<br>  
      <br>
      Activa tu cuenta en el siguiente enlace: www.broms.com.ar/activacion.php?id=$aleatorio<br>
      Estos son tus datos de registro:<br> 
      Usuario: $usuario.<br> 
      Contraseña: $contraseña.<br>");
      $mail->AddAddress($correo, $nombre);
      $mail->IsHTML(true);
       
      //Enviamos el correo electrónico
      if($mail->Send()){ 
          header('Location: index.php?verif=ok'); 
      }else{ 
          header('Location: index.php?verif=bad'); 
      } 
    }
  }
mysql_close($conn);

?>