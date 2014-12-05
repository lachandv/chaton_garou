<?php

	function dbconnexion()
{
	
	global $dbconnexion;
	return $dbconnexion;
}
try
{
	$dbconnexion= new PDO('mysql:host=195.154.82.111;dbname=chaton_garou','chaton_garou','jaimeleslicornes');
}
catch(Exception $e)
{
	die($e->getMessage());
}
?>