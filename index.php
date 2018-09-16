<!doctype html>
<html lang="pt-br">
<head>
	<title>Bootstrap</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!-- [if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<! [endif] -->
	
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a href="#" class="brand">PMSG - Controle de Acesso</a>
			<p class="navbar-text pull-right">Operador: <a href="" class="navbar-link">leandro</a></p>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3">
			<?php include_once('menu.php'); ?>
		</div>
		<div class="span9">
			<?php
				if(!isset($_REQUEST['page'])){
					include('documento.php');
				}
				else{
					include($_REQUEST['page'].".php");
				}
			?>
		</div>
	</div>		
</div>

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>