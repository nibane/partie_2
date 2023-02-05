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