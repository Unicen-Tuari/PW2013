<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Programacion Web II</title>

    <!-- Bootstrap core CSS -->
    <link href="css\bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css\signin.css" rel="stylesheet">

  <style type="text/css"></style><style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }</style></head>

  <body>

    <div class="container">
{if isset($Nombre)}
		<h1>Logged in as:<p class="text-success">{$Nombre}</p></h1>
        <button id="logout" class="btn btn-lg btn-primary btn-block">Logout</button>
{else}		
	<h1>Please Login</h1>
    <button id="login" class="btn btn-lg btn-primary btn-block" onClick="window.location = 'login.php';">Login</button>
{/if}     

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>


</body></html>