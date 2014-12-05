<?php

	class Benevoles{
	
		
	
	public static function login($mail,$password)
	{
		try
			{
				$req=dbconnexion()->prepare("select * from benevole where mail=:mail and password=:password");
				$req->bindParam(':mail',$mail);
				$req->bindParam(':password',$password);
				$req->execute();
			}
		catch(Exception $e)
			{
					die($e->getMessage());
			}
				
				if($req->rowCount() == 1)
				{	
					$Benevole= new abonne($mail,$password);
					$_SESSION['user']=$abonne;
					return false;
				}
				else
				{
					//$_SESSION["error_connexion"]="Identifiants incorrects";
				}
				
	
	
	}
	
	public static function CreateBenevole($nom,$prenom,$mail,$phone,$password)
	{
		echo $nom;
		echo $prenom;
		echo $mail;
		
		try
		{
			$req=dbconnexion()->prepare("INSERT INTO benevole(nom_benevole,prenom_benevole,mail_benevole,phone_benevole,password) values (:nom,:prenom,:mail,:phone,:password)");
			$req->execute(array("nom"=>$nom,"prenom"=>$prenom,"mail"=>$mail,"phone"=>$phone,"password"=>$password));
			$_SESSION["user"]= new Benevole($nom,$prenom,$mail,$phone,$password);
				$_SESSION["user"]->setNom($nom);
				$_SESSION["user"]->setPrenom($prenom);
				$_SESSION["user"]->setMail($mail);
				$_SESSION["user"]->setPhone($phone);
				$_SESSION["user"]->setPassword($password);
		}
		catch (Exception $e)
		{
			die($e->getMessage());
		}
		header("Location: /chaton_garou/site/benevoles/");
	}
	
	public static function ReadAllBenevole()
	{
		try
		{
			$Benevoles=array();
				$req=dbconnexion()->prepare('select nom_benevole,prenom_benevole,phone_benevole from benevole');
				$req->execute();
				
				$result = $req->fetchAll();
				
				foreach($result as $row)
				{
					$Benevoles[]=$row;
				}
				
				return $Benevoles;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		
		
	}
	public static function ReadBenevoleFromAssociation($id)
	{
				try
		{
			$Benevoles=array();
				$req=dbconnexion()->prepare('select nom_benevole,prenom_benevole,phone_benevole from benevole where id_association_benevole=:id');
				$req->bindParam(':id',$id);
				$req->execute();
				
				$result = $req->fetchAll();
				
				foreach($result as $row)
				{
					$Benevoles[]=$row;
				}
				
				return $Benevoles;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		
	}
	
	public static function updateBenevole($nom,$prenom,$mail,$phone,$password)
	{
		try
		{
	
				
	
				
			$query = "UPDATE benevole SET nom_benevole=:nom, prenom_benevole=:prenom, mail_benevole=:mail, phone_benevole=:phone, password=:password where mail_benevole='".$mail."'";
			$req=dbconnexion()->prepare($query);
			$req->bindParam(':nom',$nom);
			$req->bindParam(':prenom',$prenom);
			$req->bindParam(':mail',$mail);
			$req->bindParam(':phone',$phone);
			$req->bindParam(':password',$password);
			
			
			
			$req->execute();
				
				$_SESSION["user"]->setNom($nom);
				$_SESSION["user"]->setPrenom($prenom);
				$_SESSION["user"]->setMail($mail);
				$_SESSION["user"]->setPhone($phone);
				$_SESSION["user"]->setPassword($password);
				
		
		}
		
		catch(Exception $e)
		{
		die($e->getMessage());
		}
	}
	
	public static function deleteBenevole($mail)
	{
		try
		{
			$query="DELETE from benevole where mail_benevole ='".$mail."'";
			$req=dbconnexion()->prepare($query);
			$req->execute();
			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		
	}
	
	}
			
	
?>