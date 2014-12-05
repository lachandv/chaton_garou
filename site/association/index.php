<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Chaton garou : Que le chaton soit avec toi !!!</title>
		<link rel="stylesheet" href="../style.css" />
		<link rel="shortcut icon" href="img/favicon.ico" />
	</head>
	<body>
		<?php $retour="../"; include("../header.php"); ?>
		<div>
			<?php
				include("./../view/AssociationView.php");
				include("./../model/Association.php");
				showOrganisations(Association::readAllAssociations());
			?>
		</div>
	</body>
</html>
