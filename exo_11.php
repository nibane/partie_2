<h1>Exercice 11<h/1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une chaîne de caractère représentant une date.Exemple:formaterDateFr("2018-02-23");Affichage vendredi 23 février 2018</p>

<h2></h2>


<?php

$fmt = new IntlDateFormatter(
    "fr-FR", 
    IntlDateFormatter::FULL, 
    IntlDateFormatter::NONE, 
    'Etc/UTC', 
    IntlDateFormatter::GREGORIAN, 
    'EEEE, dd MMMM y'
);

// // parse
// $ts = $fmt->parse('Lundi, 08 Juillet 2013 09:09');
// echo $ts; 

$date = new DateTime('2018-02-23');

echo $fmt->format($date);

?>
