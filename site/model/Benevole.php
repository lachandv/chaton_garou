<?php

	class Benevole{
	
		private $id_Benevole;
		private $nom_Benevole;
		private $prenom_Benevole;
		private $mail_Benevole;
		private $phone_Benevole;
		private $password_Benevole;
		
	public function getId(){
		return $this->id_Benevole;
	}

	public function setId($id){
		$this->id_Benevole = $id;
	}

	public function getNom(){
		return $this->nom_Benevole;
	}

	public function setNom($nom){
		$this->nom_Benevole = $nom;
	}

	public function getPrenom(){
		return $this->prenom_Benevole;
	}

	public function setPrenom($prenom){
		$this->prenom_Benevole = $prenom;
	}

	public function getMail(){
		return $this->mail_Benevole;
	}

	public function setMail($mail){
		$this->mail_Benevole = $mail;
	}

	public function getPhone(){
		return $this->phone_Benevole;
	}

	public function setPhone($phone){
		$this->phone_Benevole = $phone;
	}

	public function getPassword(){
		return $this->password_Benevole;
	}

	public function setPassword($password){
		$this->password_Benevole = $password;
	}
	
	public function __construct ($nom,$prenom,$mail,$phone,$password)
	{
		
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->mail=$mail;
		$this->phone=$phone;
		$this->password=$password;
		
	}
	
	
	}
			
	
?>