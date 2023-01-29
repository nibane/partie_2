<h1>Exercice 6<h/1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.Exemple:$elements = array("Monsieur","Madame","Mademoiselle");alimenterListeDeroulante($elements);Affichage</p>

<h2></h2>


<?php

$elements = ["Monsieur","Madame","Mademoiselle"];

function alimenterListeDeroulante ($arg){
    echo "<select name = box>";
    foreach($arg as $option)
        echo"<option>".$option."</option>";
    echo "</select>";
}

alimenterListeDeroulante($elements)

?>