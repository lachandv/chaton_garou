<?php
	function checkAssosAction() {
		if(isset($_POST["action"])){
			if($_POST["action"] == 'create_assos') {
				createAssosAction();
			}
		}
	}

	function createAssosAction() {
		//Association::createAssociation($_POST["nom_association"]); TODO BENEVOLE
	}
?>