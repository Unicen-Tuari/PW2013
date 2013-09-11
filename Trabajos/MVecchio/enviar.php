<?php
    // Aquí el email al que queres recibir el correo
    // (en mi caso ecoal95[arroba]gmail[punto]com)
    $receptor = "vecchiomatias@yahoo.com.ar";
   
    //-------------------------------------------------------------------
    // VARIABLES DEL MENSAJE

    $mensaje = preg_replace('/\n/','<br>',urldecode($_POST['mensaje']));
    $nombre = urldecode($_POST['nombre']);
    $email = urldecode($_POST['email']);
    $telefono = urldecode($_POST['telefono']);
    $fecha = date('c');
    $asunto = urldecode($_POST['asunto']);
    $titulo = "Mensaje enviado por $nombre desde tu Web!";



    // El mensaje
    $data = "
    <html><head>
        <title>$titulo</title>
        <meta name='viewport' content='width:device-width,initial-scale=1'>
        <style>
        body{
            font-family:Arial,Helvetica,sans-serif;
            background: #eee;
            color: #333;
        }
        .mensaje {
            width: 100%;
            max-width: 650px;
            background: #fff;
            border: 1px solid #ccc;
            margin: 2em auto;
            padding: 2em;
        } </style>
    </head>
    <body>
        <div class='mensaje'>
            <h1>Nuevo mensaje de $nombre</h1>
            <p><strong>Fecha:</strong> $fecha</p>
            <p><strong>Telefono:</strong> $telefono</p>
            <p><strong>Mensaje:</strong><br>$mensaje</p>
            <p><strong>Email:</strong> <a href='mailto:$email'>$email</a></p>
        </div>
    </body></html>";

    $cabeceras = "MIME-Version: 1.0\r\n";
    $cabeceras .= "Content-type: text/html; charset=utf-8\r\n";
    $cabeceras .= "From: $email\r\n";
    $cabeceras .= "Reply-To: $receptor";
    $cabeceras .= "Subject: $asunto";
    
    //print_r($cabeceras);
    //echo "$data";

    // Enviamos nuestro email y damos cuenta sy hay algún error
    if(mail($receptor, $asunto,$data, $cabeceras))
        echo "SUCCES";
    else 
        echo "ERROR";
?>