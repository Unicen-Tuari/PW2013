<!DOCTYPE HTML>
<?php
include ('conn.php');
include ('consulta.php');
?>
<html>
	
	<head>
	<link rel="stylesheet" href="styles/broms-css.css">
	</head>
	
	<body>
	
		<header>
		<image src="styles/images/header.gif"/>
		</header>
	
		<nav><!--Search box-->
			<button type="button" id="search-button-movie"><image src="styles/images/peliculas.png"></button>
			<button type="button" id="search-button-serie"><image src="styles/images/series.png"></button>
			<button type="button" id="search-button-game"><image src="styles/images/juegos.png"></button>
		</nav>
		<aside><!--Aside bar of the web-->
			<form action="demo_form.asp" method="get">
				<div class="form-title"><image src="styles/images/registrate.png"></div>
				<table border="0">
				<tr>
					<th>Nombre:</th>
					<th><input type="text" name="nombre"><br></th>
				</tr><tr>
					<th>Username:</th>
					<th><input type="text" name="username"><br></th>
				</tr><tr>
					<th>Password:</th>
					<th><input type="password" name="password"><br></th>
				</tr><tr>
					<th>Mail:</th>
					<th><input type="mail" name="mail"><br></th>
				</tr><tr>
					<th>Fecha de Nacimiento:</th>
					<th><input type="date" name="fechaNac"><br></th>
				</tr>
				</table>
				<div class="submit-form"><input type="submit" value="Enviar"></div>
			</form><br>
			Archivos
				<li>Abril 2013 </li>
				<li>Mayo 2013 </li>
		</aside>
		<?php while($consulta = $q->fetch()){
		print ("
		<div class='content'>
			<div class='post'>
				<div class='datbox'><!--Box with date and title-->
					<div class='title'>
						<div id='dateblock'>	Abril	<div id='day'>	25	</div>	</div>
						<div id='post-title'>	$consulta[Titulo]	</div>
						<div id='post-details'>	Posteado En: Broms, $consulta[nombre] por $consulta[alias]	</div>
					</div>
				</div>
				<div class='datbox'><!--Image of the post-->
				<img src=$consulta[url_imagen] width='629'>
				</div>
				<div class='datbox'><!--Info of the post-->
					<div class='info'>
						$consulta[descarga]
					</div>
				</div>
				<div class='datbox'>
					<div class='tec'><!--Tecnical dates of the post-->
					$consulta[requirimientos]
					</div>
				</div>
				<div class='datbox'>
					<div class='descrip'><!--Description of the post-->
					$consulta[descripcion]
					</div>
					<button type='button' class='go-post' onclick='javascript:self.location='post1.html?id=1';'>Ir al post</button>
				</div>
			</div>
		</div>
		");} ?>
	
		<footer>
		<button type="button" id="goto-heaven" value="IR AL CIELO" onclick="scrollTo(0)"><image src="styles/images/cielo.png"></button><br>
		<div id="footer-text">		
		© Broms Web 2013
		</div>
		</footer>
	</body>
</html>