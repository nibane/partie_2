<h1>Exercice 12<h/1>

<p>Créer une classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu'une classe VoitureElec qui hérite(extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).Instancier une voiture «classique» et une voiture «électrique»ayant les caractéristiques suivantes:Peugeot 408: $v1 = new Voiture("Peugeot","408");BMW i3150: $ve1 = new VoitureElec("BMW","I3",100);Votre programme de test devra afficher les informations des 2 voitures de la façon suivante: echo $v1->getInfos()."<br/>";echo $ve1->getInfos()."<br/>";</p>

<h2>Résultat</h2>

<p></p>
<?php

class Voiture{
    
    public String $marque;
    
    public String $modele;


    function __construct(string $marque, string $modele,)
    {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    function set_marque($marque){
        $this->marque = $marque;
    }
    function get_marque(){
        return $this->marque;
    }

    function set_modele($modele){
        $this->modele = $modele;
    }
    function get_modele(){
        return $this->modele;
    }
}
    class VoitureElec extends voiture{
    public int $autonomie;


    }









?>