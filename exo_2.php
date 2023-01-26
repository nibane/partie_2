<h1>Exercice 2<h/1>

<p>Soit le tableau suivant:$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);AffichagePaysCapitaleALLEMAGNEBerlinFRANCEParisITALIERomeUSAWashington<p/>

<h2>Résultat</h2>

<?php

$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");


function afficherTableHTML($arg){
    '<table>';
    '<tr>';
        echo '<th>Pays</th>';
        echo '<th>Capitale</th>';
    '</tr>';
    foreach ($arg as $key => $value){
        echo "<td>" . $key . $value . "</td>";
    }
}


afficherTableHTML($capitales);
?>

