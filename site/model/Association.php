<?php

class Association {
	private $id_association;
	private $libelle;
	private $contact;
	private $benevoles;

	public function getId_association()
	{
		return $this->id_association;
	}

	public function setId_association($id_association)
	{
		$this->id_association = $id_association;
	}

	public function getLibelle()
	{
		return $this->libelle;
	}

	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}

	public function getContact(){
		return $this->contact;
	}

	public function setContact($contact){
		$this->contact = $contact;
	}

	public function getBenevoles()
	{
	    return $this->benevoles;
	}

	public function setBenevoles($benevoles)
	{
		this->benevoles = $benevoles;
	}
	
	function __construct($id_association, $libelle, $contact, $benevoles)
	{
		$this->id_association = $id_association;
		$this->libelle = $libelle;
		$this->contact = $contact;
		$this->benevoles = $benevoles;
	}

	public static function createAssociation($pdo, $association) {
		try
		{
			$req = $pdo->prepare("INSERT INTO association 'libelle_association, id_contact_association' values ':libelle, :id_contact_association'");
			$req->execute(array(
				':libelle' => $association->getLibelle(), 
				':id_contact_association' => $association->getContact()->getId()
				));
		}
		catch (Exception $e)
		{
			die($e->getMessage());
		}		

	}


	public static function readAllAssociations($pdo) {
    	try
		{
			$associations=array();
			$query = $pdo->prepare('select * from association');
			$query->execute();
			
			$data = $query->fetchAll();
			
			foreach($data as $row)
			{
				$associations[]= new Association(
				    $row["id_association"], 
				    $row["libelle_association"],
				    null
				    );
			}
			
			return $associations;
		}
		catch(Exception $ex)
		{
			die($ex->getMessage());
			
		}
    }

}

?>