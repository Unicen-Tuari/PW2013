<!DOCTYPE HTML>
<?php
include ('conn.php');
include ('consulta_principal.php');
?>
<script type="text/javascript" src="js/main.js"></script>
<html>
	
	<head>
	<link rel="stylesheet" href="styles/broms-css.css">
	</head>
	
	<body>
	
		<header>
		<image src="styles/images/header.gif"/>
		</header>
	
		<nav><!--Search box-->
			<button type="button" id="search-button-movie">PELICULAS</button>
			<button type="button" id="search-button-serie">SERIES</button>
			<button type="button" id="search-button-game">JUEGOS</button>
		</nav>
		<aside><!--Aside bar of the web-->
			<form action="broms.php">
				<div class="form-title">REGISTRATE!</div>
				<table border="0">
				<tr>
					<th>Nombre:</th>
					<th><input type="text" id="name" placeholder="Nombre"><br></th>
				</tr><tr>
					<th>Username:</th>
					<th><input type="text" id="username" placeholder="Username"><br></th>
				</tr><tr>
					<th>Password:</th>
					<th><input type="password" id="password"><br></th>
				</tr><tr>
					<th>Mail:</th>
					<th><input type="text" id="email" placeholder="Email"><br></th>
				</tr><tr>
					<th>Fecha de Nacimiento:</th>
					<th><input type="date" id="fechaNac"><br></th>
				</tr>
				</table>
				<button type="button" class="btn" onclick="verificarFormulario();">Enviar</button>
			</form><br>
			<div class="form-title">Archivos</div>
				<li>Abril 2013 </li>
				<li>Mayo 2013 </li>
		</aside>
		<?php
		$punt = 0;
		$post = $_GET['numero']; 
		 while($punt <> $post){
		 	$punt ++;
		 	$consulta = $q->fetch();}
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
				</div>
			</div>
		</div>
		"); ?>
	
		<footer>
		<button type="button" id="goto-heaven" value="IR AL CIELO" onclick="scrollTo(0)">Ir al cielo</button><br>
		<div id="footer-text">		
		© Broms Web 2013
		</div>
		</footer>
	</body>
</html>