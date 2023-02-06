<?php

require "exo_13.php";

$v1 = new Voiture("Batmobile", "Char de combat", 1);

echo $v1;
echo $v1->demarrer();
echo $v1->accelerer(30);
echo $v1->accelerer(30); 
echo $v1->stop();
echo $v1->info();



?>