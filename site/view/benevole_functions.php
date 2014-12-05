

	<?php
	function displayHeader()
	{
?>
		
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="style/style.css" />
			<title>Premiers tests du CSS</title>
			 <script type="text/javascript" src="script/jquery.js"></script>
			<script type="text/javascript" src="script/jquery-ui.js"></script>
			<script type="text/javascript" src="script/script.js"></script>
		
		
		
		</head>
		<body>
<?php
	}
	
	function displayFormulaire()
		{
			?>
				<h1>Création Benevole</h1>
				<form method="post" action=".">
				<p>Nom : <input type="text" name="benevole_name"/></p>
				<p>prenom : <input type="text" name="benevole_prenom"/></p>
				<p>mail : <input type="text" name="benevole_mail"/></p>
				<p>phone : <input type="text" name="benevole_phone"/></p>
				<p>password: <input type="password" name="benevole_password"/></p>
				<input type="hidden" name="action" value="create_benevole"/>
				<input type="submit" value="s'inscrire"/>
				</form>
				
				
				
<?php

		}
		
		function displayAllBenevoles()
		{
		
	
?>
	
		<h1> Affichage de tous les benevoles</h1>
		
<?php
			$Benevoles=Benevoles::ReadAllBenevole();
			
			foreach($Benevoles as $row)
			{	
				echo "nom :". $row[0] . "Prénom :". $row[1] ."Téléphone : ". $row[2] . "</br>" ;
			}
			
			}
			
			function displayProfil()
			{
?>
		<h1> Consultation du profil</h1>
		

			<form method="post" action=".">
			<p> nom :<input type="text" value="<?php echo $_SESSION["user"]->getNom();?>" name="new_name"/></p>
			<p> prenom :<input type="text" value="<?php echo $_SESSION["user"]->getPrenom();?>" name="new_prenom"/></p>
			<p> mail :<input type="text" value="<?php echo $_SESSION["user"]->getMail();?>"name="new_mail"/></p>
			<p> phone :<input type="text" value="<?php echo $_SESSION["user"]->getPhone();?>"name="new_phone"/></p>
			<p> password :<input type="text" value="<?php echo $_SESSION["user"]->getPassword();?>" name="new_password"/></p>
			
			<input type="submit" value="sauvegarder"/>
			</form>
			
			<h1> Supprimer un compte </h1>
			
			<form method="post" action="."/>
			<p>Entrez l'adresse mail du compte à supprimer</p>
			<input type="text" name="mail_delete"/>
			<input type="submit" value="Effacer"/>
			
			
			
			
<?php
	}

