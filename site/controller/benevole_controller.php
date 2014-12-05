<?php



		
			if(isset($_POST["benevole_name"]) && isset($_POST["benevole_prenom"]) && isset($_POST["benevole_mail"]) && isset($_POST["benevole_phone"]) && $_POST["benevole_password"])
			{
				Benevoles::CreateBenevole($_POST["benevole_name"],$_POST["benevole_prenom"],$_POST["benevole_mail"],$_POST["benevole_phone"],$_POST["benevole_password"]);
			}
			
		
		
		
			if(isset($_POST["new_name"]) && isset($_POST["new_prenom"]) && isset($_POST["new_mail"]) && isset($_POST["new_phone"]) && isset($_POST["new_password"]))
			{
				echo $_POST["new_name"];
				Benevoles::updateBenevole($_POST["new_name"],$_POST["new_prenom"],$_POST["new_mail"],$_POST["new_phone"],$_POST["new_password"]);
			}
		

	
?>