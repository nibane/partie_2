<h1>Exercice 8<h/1>

<p>Soit l'URL suivante: http://my.mobirise.com/data/userpic/764.jpgCréer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.</p>

<h2></h2>


<?php




function repeterImage($nb){
    while ($nb > 0) {
        echo '<img src="764.jpg">';
        $nb--  ; 
    }

}

repeterImage(2)


?>