<?php

	function dbconnexion()
{
	
	global $dbconnexion;
	return $dbconnexion;
}
try
{
	$dbconnexion= new PDO('mysql:host=localhost;dbname=chaton_garou','root','');
}
catch(Exception $e)
{
	die($e->getMessage());
}
?>