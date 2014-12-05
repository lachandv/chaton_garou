<?php

	//Singleton

	class SPDO
	{
		//On déclare tout en "private" pour une question de sécurité (que je n'ai pas encore compris)
		private $PDOInstance = null; //on créée une instance $PDOInstance

		private static $instance = null; //on créée une instance $instance
		//on définit des superglobales (pour y avoir accès tout le temps)
		const DEFAULT_SQL_USER = 'root';
		const DEFAULT_SQL_HOST = 'localhost';
		const DEFAULT_SQL_PASS = '';
		const DEFAULT_SQL_DTB = 'chaton_garou';

		private function __construct() //on créée la connexion avec la base
		{
			$this->PDOInstance = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS);
		}
		
		public static function getInstance()
		{
			if(is_null(self::$instance)) //si la connexion à la base n'est pas faite, la faire.
			{
				self::$instance = new SPDO();
			}
			return self::$instance; //renvoie la connexion
		}
		
		public function query($query) // ...???...
		{
			return $this->PDOInstance->query($query);
		}
	}
	
?>