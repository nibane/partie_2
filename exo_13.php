<h1>Exercice 12<h/1>

<p>Créer  une  classe  Voiture  possédant  les  propriétés  suivantes: marque,  modèle,  nbPorteset vitesseActuelleainsi que les méthodes demarrer( ), accelerer( )et stopper( )en plus des  accesseurs  (get)  et  mutateurs  (set)  traditionnels.  La  vitesse  initiale  de  chaque  véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un véhicule. v1 ➔"Peugeot","408",5v2 ➔"Citroën","C4",3Coderl'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests  pour  vérifier  la  cohérence  de  la  classe Voiture. Vous  devez  afficher  les  tests  et  les éléments suivants:Bonus: ajouter une méthode ralentir(vitesse)dans la classe Voiture.</p>

<h2>Résultat</h2>


<?php

class Voiture{
    public $marque;
    public $modele;
    public $nbPortes;
    public $vitesseActuelle = 0;

    //propriétés_________________________
    //méthodes___________________________
    function set_marque($marque){
        $this->marque = $marque;
    }
    function get_marque(){
        return $this->marque;
    }
    //___________________________________
    function set_modele($modele){
        $this->modele = $modele;
    }
    function get_modele(){
        return $this->modele;
    }
    //__________________________________
    function set_nbPortes($nbPortes){
        $this->nbPortes = $nbPortes;
    }
    function get_nbPortes(){
        return $this->nbPortes;
    }
    //__________________________________
    function set_vitesseActuelle($vitesseActuelle){
        $this->vitesseActuelle = $vitesseActuelle;
    }
    function get_vitesseActuelle(){
        return $this->vitesseActuelle;
    }
    //___________________________________
    function get_demarrer(){
        return $this->demarrer = $demarrer;
    }
    function set_demarrer($demarrer){
        $this->demarrer = $demarrer;
    }
    //___________________________________
    function get_accelerer(){
        return $this->accelerer = $accelerer;
    }
    function set_accelerer($accelerer){
        $this->accelerer = $accelerer;
    }
    //___________________________________
    function get_stopper(){
        return $this->stopper = $stopper;
    }
    function set_stopper($stopper){
        $this->stopper = $stopper;
    }
    //___________________________________
    function get_ralentir(){
        return $this->ralentir = $ralentir;
    }
    function set_ralentir($ralentir){
        $this->ralentir = $ralentir;
    }
    //___________________________________
    


}

?>