parent::__construct($arg1,$arg2)
$this->arg3 = $arg3
//arg1 et 2 vienne de la class mere

class Personne(){
    public static function hello(){
        echo 'salut'
    }
}

Personne::hello();
//affiche 'salut'
pas de this dans une méthode static
on peut faire pareill avec un atribut

créer un atribut avec protected
au lieu de public, fera que seul 
les class filles pouron avoir 
accés a ces atribut


mettre final devant une class empechera un
heritage suplementaire
pareille pour les methodes 

mettre abstract devant une class
est les methodes de cette class
fera quel pouront etre utilisé
comme base pour des filles
mais quel ne pouront pas etre 
utilisé