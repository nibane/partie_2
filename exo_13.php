<h1>Exercice 12<h/1>

<p>Créer  une  classe  Voiture  possédant  les  propriétés  suivantes: marque,  modèle,  nbPorteset vitesseActuelleainsi que les méthodes demarrer( ), accelerer( )et stopper( )en plus des  accesseurs  (get)  et  mutateurs  (set)  traditionnels.  La  vitesse  initiale  de  chaque  véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un véhicule. v1 ➔"Peugeot","408",5v2 ➔"Citroën","C4",3Coderl'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests  pour  vérifier  la  cohérence  de  la  classe Voiture. Vous  devez  afficher  les  tests  et  les éléments suivants:Bonus: ajouter une méthode ralentir(vitesse)dans la classe Voiture.</p>

<h2>Résultat</h2>

<p></p>
<?php

class Voiture{
    //propriétés_________________________
    public string $marque;
    public string $modele;
    public int $nbPortes;
    public int $vitesseActuelle;
    public bool $status;

    // constructeur 
    function __construct(string $marque, string $modele, int $nbPortes){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
        $this->status = FALSE;
        
    }

    //Getter et setter
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
    //méthodes___________________________
    //méthodes demarrer sert a demarrer une voiture

    public function demarrer(){

        if($this->status == FALSE){
            $this->status = TRUE;
            return "Le Vehicule ".$this->marque." ".$this->modele." demarre."."<br>";

        }else {
            return "Le Vehicule ".$this->marque." ".$this->modele."  est déjà demarré."."<br>";
        }
    }
    //__________________________________
    //méthodes accelerer permet d'augementer la valeur de vitesseActuelle.

    public function accelerer($acceleration){
        if($this->status == FALSE){
            echo "La voiture est eteinte. <br>";
        }
        else {
            $this->vitesseActuelle += $acceleration;
            echo "La voiture accélére de ".$acceleration." est passe à ".$this->vitesseActuelle."<br>";
        }
    }
    //___________________________________
    //méthodes stop permet d'arreter le vehicule.

    public function stop(){
        if($this->vitesseActuelle == 0){
            echo "Le vehicule est déjà stopper.<br>";
        }
        else{
            $this->vitesseActuelle = 0;
            echo "La voiture est a ".$this->vitesseActuelle." <br>";
        }
    }
    //_______________________________
    //méthodes info sert a afficher des infos sur la voiture.
    public function info(){
        echo "Nom et modèle du véhicule : ".$this->marque." ".$this->modele."<br>";
        echo "Nombre de portes : ".$this->nbPortes."<br>";
        if ($this->status == FALSE){
            echo "Le véhicule ".$this->marque."est arreter. <br>";
        }else {
            echo "Le véhicule ".$this->marque."est demarrer. <br>";
        }

        
    }
    
    //Magic méthod toString pour mise en forme par defaut à l'appel d'un objet.Voiture______________________________
    function __toString() {
        return $this->marque . " " . $this->modele . " " . $this->nbPortes."<br>";
    }
    //___________________________________



}



?>