<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Chaton garou : Que le chaton soit avec toi !!!</title>
		<link rel="stylesheet" href="dist/css/bootstrap.css" />
		<link rel="shortcut icon" href="img/favicon.ico" />
	</head>
	<body>
		<img src="img/background2.jpg" alt="Chaton garou : Que le chaton soit avec toi !!!"/>
		<a href="accueil.php">Entrer sur le site</a>
	</body>
</html>

<?php
	
	include_once("db.php");
	include_once("model/Benevole.php");
	include_once("model/Benevoles.php");
	session_start();
	include_once("controller/benevole_controller.php");
	include_once("view/benevole_functions.php");
	include_once("view/benevole_view.php");
      
		
	
?>


