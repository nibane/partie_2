<h1>Exercice 1<h/1>

<p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.Vous devrez appeler la fonction comme suit: convertirMajRouge($texte);Affichage(si $texte = «Mon texte en paramètre»)MON TEXTE EN PARAMETRE<p/>

<h2>Résultat</h2>

<?php

function convertirMajRouge($arg){
    $arg = strtoupper($arg);
    return '<span style="color:red;">' . $arg . '</span>';
}

echo convertirMajRouge("mon texte en parametre");
?>
