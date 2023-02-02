<h1>Exercice 11<h/1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une chaîne de caractère représentant une date.Exemple:formaterDateFr("2018-02-23");Affichage vendredi 23 février 2018</p>

<h2></h2>


<?php

function formaterDateFr($date)
{
    $fmt = new IntlDateFormatter(
        "fr-FR",
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
        'Etc/UTC',
            IntlDateFormatter::GREGORIAN,
        'EEEE, dd MMMM y'
    );

    $date = new DateTime($date);

    echo $fmt->format($date);
}

formaterDateFr("2018-02-23")

?>
