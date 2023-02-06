<h1>Exercice 15<h/1>

<p>En  utilisant  les  ressources  de  la  page http://php.net/manual/fr/book.filter.php,  vérifier  si  une adresse e-mail a le bon format.AffichageL'adresse elan@elan-formation.frest une adresse e-mail valideL'adresse contact@elanest une adresse e-mail invalide</p>

<h2>Résultat</h2>


<?php

$url = "elan@elan-formation.fr";

if (filter_var($url, FILTER_VALIDATE_EMAIL)) {
  echo("L'adresse mail est valide");
} else {
  echo("L'adresse mail n'est pas valide");
}

?>