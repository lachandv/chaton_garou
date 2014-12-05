<?php
    function showCreateOrganisationFormular() {
        echo '<form method="post" action".">';
        echo '<label>Nom d\'association:</label>  <input type="text" name="nom_association">  </input>';
        echo '<input type="submit" value ="Ok"/>';
        echo '<input type="hidden" name="action" value="create_assos"/>';
        echo '</form>';
    }

    function showOrganisation($organisation) {
        echo '<div class="organisations">';
        echo '<div>Nom : ' + $organisation->getLibelle() + '</div>';
        echo '<p>Benevoles : </p>';
        echo '<ul>';
        /*foreach($volunteer in $organisation->getBenevoles()) {
            // showBenevoles();
        }*/
        echo '</ul>';
        echo '</div>';
    }

    function showOrganisations($organisations) {
        echo '<ul>';
        foreach($organisations as $organisation) {
            echo '<li>';
            showOrganisation($organisation);
            echo '</li>';
        }
        echo '</ul>';
    }
?>