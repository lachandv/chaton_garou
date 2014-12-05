<?php

	include ('../model/mod_cata.php'); //pdo
	if(isset($_GET['suppCata']))
	{
		$id=$_GET['suppCata'];
		$obj=new Catastrophe();
		$obj->supprimer($id);
	}

		if(isset($_POST['date_catastrophe'])&&isset($_POST['libelle_catastrophe'])&&isset($_POST['gravite_catastrophe'])&&isset($_POST['longitude_catastrophe'])&&isset($_POST['latitude_catastrophe']))
	{
		$date_catastrophe=$_POST['date_catastrophe'];
		$libelle_catastrophe=$_POST['libelle_catastrophe'];
		$gravite_catastrophe=$_POST['gravite_catastrophe'];
		$longitude_catastrophe=$_POST['longitude_catastrophe'];
		$latitude_catastrophe=$_POST['latitude_catastrophe'];
		$obj=new Catastrophe();
		$obj->ecrire($date_catastrophe,$libelle_catastrophe,$gravite_catastrophe,$longitude_catastrophe,$latitude_catastrophe);
	}
//echo"<meta http-equiv=\"refresh\" content=\"0; url=../view/vue_cata.php\" />";
?>