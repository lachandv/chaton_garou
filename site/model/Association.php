<?php
include("./../../sql.php");
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
		$this->benevoles = $benevoles;
	}
	
	public function __construct($libelle, $contact, $benevoles)
	{
		$this->libelle = $libelle;
		$this->contact = $contact;
		$this->benevoles = $benevoles;
	}

	public static function createAssociation($pdo, $association) {
		$query = "INSERT INTO association (libelle_association, id_contact_association) values ('" .
				$association->getLibelle() ."','" . 
				$association->getContact()->getId() . "')";	

		$req = query($query);	

	}


	public static function readAllAssociations() {

		$query = 'select * from association';
			
		$data = query($query);	
		$associations = array();
		foreach($data as $row)
		{
			$assos = new Association(
				$row["libelle_association"],
				null, // read benevole
				null
			);

			$assos->setId_association($row["id_association"]);

			$associations[]= $assos;
		}
			
		return $associations;
    }

    public static function updateAssociation($pdo, $association){

    	$query = "UPDATE association set libelle_association = '" . $association->getLibelle() . "',  id_contact_association = '" . $association->getContact()->getId() . "' where id_association ='" . $association->getId_association() . "'";
    	$data = query($query);
    		
	}

		 public static function deleteAssociation($association){
	 	echo $association->getId_association();
    	$query = "DELETE FROM association where id_association='" . $association->getId_association() ."'";
    	echo $query ;
    	$data = query($query);
    		
	}
}

?>