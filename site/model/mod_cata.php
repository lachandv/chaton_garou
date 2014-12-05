<?php
	include ('../model/sql.php'); //PDO

	class Catastrophe
	{
		public function afficher() 
		{
			echo "
			<table border='1'>
				<tr>
		       		<th>id_catastrophe</th>
		       		<th>longitude_catastrophe</th>
		       		<th>latitude_catastrophe</th>
		      		<th>date_catastrophe</th>
		      		<th>libelle_catastrophe</th>
		      		<th>gravite_catastrophe</th>
		   		</tr>";

			foreach (SPDO::getInstance()->query('SELECT * FROM catastrophe') as $lgn) 
			{
				$id_type_cata=$lgn['id_type_catastrophe'];
				$req = SPDO::getInstance()->query("SELECT * FROM type_catastrophe WHERE id_type_catastrophe='$id_type_cata'");
				$lgn_type_cata = $req->fetch(PDO::FETCH_ASSOC);

				echo "
				<tr>
					<td>".$lgn['id_catastrophe']."</td>
					<td>".$lgn['longitude_catastrophe']."</td>
					<td>".$lgn['latitude_catastrophe']."</td>
					<td>".$lgn['date_catastrophe']."</td>
					<td>".$lgn_type_cata['libelle_catastrophe']."</td>
					<td>".$lgn_type_cata['gravite_catastrophe']."</td>
					<td><input type=\"button\" value=\"Supprimer\" onclick=\"cata_delete(".$lgn['id_catastrophe'].")\"/></td>
					";
			}
			echo "
				</tr>
			</table>";
		}

		public function supprimer($id)
		{
			SPDO::getInstance()->query("DELETE FROM catastrophe WHERE id_catastrophe='$id'");
		}

		public function ecrire($date_catastrophe,$libelle_catastrophe,$gravite_catastrophe,$longitude_catastrophe,$latitude_catastrophe)
		{

			///////////////////
			SPDO::getInstance()->query("INSERT INTO catastrophe(id_type_catastrophe) VALUES('$id_type_catastrophe')");
			SPDO::getInstance()->query("INSERT INTO type_catastrophe(libelle_catastrophe, gravite_catastrophe) VALUES ('$libelle_catastrophe','$gravite_catastrophe') WHERE id_type_catastrophe=$id_type_catastrophe");
		}
	}
?>