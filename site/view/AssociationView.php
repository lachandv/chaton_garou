<?php
    function showCreateOrganisationFormular() {
        echo '<form method="post" action"./create">';
        echo '<label>Nom d\'association:</label>  <input type="text" name="nom_association">  </input>';
        echo '</form>';
    }

	function showOrganisation($organisation) {
        echo '<div>';
        echo '<div>Nom : ' + $organisation->getNom_association() + '</div>';
        echo '<p>Benevoles : </p>';
        echo '<ul>';
        foreach($volunteer in $organisation->getBenevoles()) {
            // showBenevoles();
        }
        echo '</ul>';
        echo '</div>';
        echo '</div>';
    }

    function showOrganisations($organisations) {
        echo '<ul>';
        foreach($organisation as $organisations) {
            echo '<li>'
            showOrganisation($organisation);
            echo '</li>';
        }
        echo '</ul>';
    }
?>