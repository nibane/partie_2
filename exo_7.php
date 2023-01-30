<h1>Exercice 7<h/1>

<p></p>

<h2></h2>


<?php

$tabchoix = ["choix 1" => 0];

function genererCheckbox($tab){
    foreach ($tab as $key=> $value){
        echo "<label for ='checkbox'>.$key.</label>";
        echo "id = 'checkbox' name = 'checkbox'type = 'checkbox'";
    }
  
}

genererCheckbox($tabchoix,1)


?>