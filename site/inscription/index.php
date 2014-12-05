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
			if (isset($_GET["insc"]))
			{
				if ($_GET["insc"]=="benevoles") {		
					include("./../model/Benevole.php");
					include("./../model/Benevoles.php");
					session_start();
					include("./../db.php");
					include("./../view/benevole_functions.php");
					displayFormulaire();
					include("./../controller/benevole_controller.php");
				}
				else
					{
						include("./../view/AssociationView.php");
						showCreateOrganisationFormular();
					}
			}
			else
			{
				echo("<p id=\"insc_vousetes\">Vous êtes...</p><a href=\"./index.php?insc=benevoles\"><button id=\"insc_buttonbenev\">...un bénévole</button></a><a href=\"./index.php?insc=association\"><button>...une association</button></a>");
			}
			
			?>
		</div>
	</body>
</html>
