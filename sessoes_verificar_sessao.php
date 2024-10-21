<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>verificar sessões</title>
	<?php 

	session_start();

	if ($_SESSION['nome'] != "master") {

		session_destroy();

		header("location:sessao_bloqueando_paginas.php");
		// code...
	}

	 ?>
</head>
<body>

	<br>Página autorizada</br>

</body>
</html>