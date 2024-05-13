<pre>
<?php

    class Utilisateur { // declaration of class ; don't forget good practices ;
        static $annee = 2024;
        public $nom; // privillage and attribute ;
        public $prenom;
        protected $age;

        public function __construct($n,$p,$a) // constructeur ;
        {
            $this -> nom = $n; // initialise values of attributes ;
            $this -> prenom = $p;
            $this -> age = $a;
        }
        // Encapsulation :
        // Getters :
        public function getAge(){
            return $this -> age;
        }

        // Setters :
        public function setAge($x_age){
            $this -> age = $x_age;
        }

        public function presentezVous(){
            return "I'am" . $this -> nom . " " . $this -> prenom;
        }

        static function example_static_method(){
            echo 'Hello World from static method';
        }
    }

    class Etudiant extends Utilisateur{
        public $branche;
        public $groupe;
        
        public function __construct($n,$p, $a, $b, $g)
        {
            parent :: __construct($n, $p, $a);
            $this -> branche = $b;
            $this -> groupe = $g;
        }

        public function presentezVous(){
            return parent :: presentezVous();
        }

    }

    $user1 = new Utilisateur("MARZOUG", "KHALID",24); // l'instance ;

    $user1 -> nom = "SIDQUI"; // Edit attribute value ; 
    $user1 -> prenom = "ZAKARIA";
    $user1 -> setAge(22);

    $user2 = NEW Utilisateur("MARZOUG","KHALID",24); // instance ;

    $etudiant1 = new Etudiant("OUCHOUID","ZAKARIA",17, "DD", 105);

    var_dump($user1); // echo don't display objects ;
    echo "<br />";
    echo "<br />";
    var_dump($user2);
    echo "<br />";
    echo "<br />";
    echo $user1 -> getAge();
    echo "<br />";
    echo "<br />";
    echo $user2 -> getAge();
    echo "<br />";
    echo "<br />";
    var_dump($etudiant1);
    echo "<br />";
    echo "<br />";
    echo Utilisateur :: $annee;
    echo "<br />";
    echo "<br />";
    Utilisateur :: example_static_method();
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";
    ?>
</pre>