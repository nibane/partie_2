<h1>Exercice 14<h/1>

<p>En  utilisant  les  ressources  de  la  page http://php.net/manual/fr/book.filter.php,  vérifier  si  une adresse e-mail a le bon format.AffichageL'adresse elan@elan-formation.frest une adresse e-mail valideL'adresse contact@elanest une adresse e-mail invalide</p>

<h2>Résultat</h2>


<?php

$url = "https://www.google.com/search?q=php+%21&rlz=1C1GCEA_enFR927FR927&ei=hMLgY7KGNbeTkdUP8fGquAw&ved=0ahUKEwiy2P-AxYD9AhW3SaQEHfG4CscQ4dUDCA8&uact=5&oq=php+%21&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIECAAQQzIFCAAQgAQyBAgAEEMyBAgAEEMyBAgAEEMyBAgAEEMyBAgAEEMyBAgAEEMyBAgAEEMyBQgAEIAEOgoIABBHENYEELADOgYIABAWEB5KBAhBGABKBAhGGABQpwZY8iFgvyxoAXAAeACAATiIAZkCkgEBNpgBAKABAcgBCMABAQ&sclient=gws-wiz-serp";
if (filter_var($url, FILTER_VALIDATE_URL)) {
  echo("URL est valide");
} else {
  echo("URL n'est pas valide");
}

?>