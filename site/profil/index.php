<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Chaton garou : Que le chaton soit avec toi !!!</title>
		<link rel="stylesheet" href="../style.css" />
		<link rel="shortcut icon" href="img/favicon.ico" />
	</head>
	<body>
		<?php include("../header.php"); ?>
		<div>
			<?php
			include("./../model/Benevole.php");
				include("./../model/Benevoles.php");
				session_start();
				include("./../db.php");
				
				include("./../view/benevole_functions.php");
				displayHeader();
				displayAllBenevoles();
				displayProfil();
				include("./../controller/benevole_controller.php");
			?>
		</div>
	</body>
</html>
