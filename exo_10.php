<h1>Exercice 10<h/1>

<p>En utilisant l'ensemble des fonctions personnalisées crées précédemment,  créer  un  formulaire complet  qui  contient  les  informations  suivantes:  champs  de  texteavec  nom,  prénom,  adresse  e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation: «Développeur Logiciel»,«Designer web», «Intégrateur» ou «Chef de projet».Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit)</p>

<h2></h2>


<?php

//______________________________________EXO_5___________________________________________________
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
