<?php

	function dbconnexion()
{
	
	global $dbconnexion;
	return $dbconnexion;
}
try
{
	$dbconnexion= new PDO('mysql:host=127.0.0.1;dbname=chaton_garou','root','nuitinfo');
}
catch(Exception $e)
{
	die($e->getMessage());
}
?>