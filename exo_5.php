<h1>Exercice 5<h/1>

<p>Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés.Exemple:$nomsInput = array("Nom","Prénom","Ville");afficherInput($nomsInput);Affichage</p>

<h2>Résultat</h2>







<?php

$nomInput = ["Nom","Prénom","Ville"];

function afficherInput(array $arg){
    echo "<form>";
    foreach ($arg as $form ) {
        echo "<div><label>$form</label><br><input type='string'><br></div>";
    }
    echo "</form>";
}

afficherInput($nomInput);

?>
