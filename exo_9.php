<h1>Exercice 8<h/1>

<p>Créer une fonctionpersonnalisée permettant d'afficher des boutons radio avec un tableau de valeurs en paramètre("Monsieur","Madame","Mademoiselle").</p>

<h2>Résultat</h2>


<?php

function afficherRadio(...$element) {
    foreach ($element as $key) {
        echo '<input type="radio">';
        echo '<label for="html">'.$key.'</label><br>';
    } 

}

afficherRadio("ptio","gerard","vélo")

?>
