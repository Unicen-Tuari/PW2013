<!DOCTYPE html>	
<html>
<head>
	<title>TT Taller de Reparacion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" href="../css/own.css" media="screen">
</head>
<body>
	<div class="container">
		<form class="col-lg-4 col-lg-offset-4" method="POST" id="form_login" action="">
			<legend class="text-center">DataOS Administración</legend>
			<div class="form-group input-group">
				<span class="input-group-addon glyphicon glyphicon-user"></span>
				<input type="text" name="username" placeholder="Usuario" class="form-control" autofocus required>
			</div>
			<div class="form-group input-group">
				<span class="input-group-addon glyphicon glyphicon-lock"></span>
				<input type="password" name="password" placeholder="Contraseña" class="form-control" required>
			</div>
			<div class="form-group text-center">
				<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span></button>
			</div>
		</form>
	</div> 
	<script type="text/javascript" src="../js/jquery-1.10.0.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/admin.js"></script>
</body>
</html>