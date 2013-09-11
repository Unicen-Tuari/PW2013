<!doctype html>
<html>
<head>
	<title>Compras y Ventas Dx.</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<header>
	<nav class="header">
		<a class="header" href="index.html"><h1><u>Cerrar Sesi&oacute;n</u></h1></a><br><br>
		<br><a class="header" href="sesion.html"><h1>Usuari@</h1></a>
	</nav>
	<img class="logo" src="images/logo.png" alt="logo de compras y ventas dx">
	<titulo>Compras y Ventas Dx.</titulo>
</header>
	<nav>
		<a class="botones" href="index.html">INICIO</a>
		<a class="botones" href="vendo.html">VENDO</a>
		<a class="botones" href="compro.html">COMPRO</a>
		<a class="botones" href="ayuda.html">AYUDA</a>
		<a class="botones" href="nosotros.html">NOSOTROS</a>
		<a class="botones" href="ingrese.html">INGRESE NUEVO AVISO</a>
	</nav>
	
	<article>
		<aside>
		<a href= "http://www.facebook.com"><img class="logo_aside" src="images/logo_face.jpg"></a>
		<a href= "http://www.gmail.com"><img class="logo_aside" src="images/logo_gmail.jpg"></a>
		<img src="images/linea.png"><br>
		<img src="files/publicidades/publicidad_1.gif" alt=""><br>
		<img src="images/linea.png"><br>
		<img src="files/publicidades/publicidad_2.gif" alt=""><br>
		<img src="images/linea.png"><br>
		<img src="files/publicidades/publicidad_4.jpg" alt=""><br>
		<img src="images/linea.png"><br>
		<img src="files/publicidades/publicidad_5.png" alt=""><br>
		<img src="images/linea.png"><br>
		<img src="files/publicidades/publicidad_1.gif" alt=""><br>
		<img src="images/linea.png"><br>
		<img src="files/publicidades/publicidad_2.gif" alt=""><br>
		<img src="images/linea.png"><br>
		</aside>
	

	<div class="mi_sesion">

		<?php

			include ('consulta2.php');

		?>
	</div>

	<div class="mi_sesion">
		
		<?php

			include ('consulta.php');

		?>
	</div>

	</div>
	</article> 
	<footer>
		Programaci&oacute;n Web l</footer>
</body>


</html>