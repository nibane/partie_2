<h1>Exercice 7<h/1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>


<?php

$tabchoix = ["choix 1" => 1];

function genererCheckbox($tab){
    foreach ($tab as $key=> $value){
        if ($value == 0){
            echo "<input id = 'checkbox' name = 'checkbox'type = 'checkbox'>";
        }else {
            echo "<input id = 'checkbox' name = 'checkbox'type = 'checkbox' checked>";
        }
        echo "<label for ='checkbox'>$key</label>";

    }
  
}

genererCheckbox($tabchoix)


?>