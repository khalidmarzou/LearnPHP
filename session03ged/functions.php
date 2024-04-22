<?php
/////////////////////////////////////////////////////////////////
    // Local and Global Scope :
    $nom = "MARZOUG";




    function sayHello($nom){
        echo "<h1 style=\"color :orange;\">==> Hello {$nom} From ' PHP ' <==</h1>";
    };
    // if we want to work with a global var, we must send it in config of the function :
    sayHello($nom);
    // or this is the second method if we want to work with a global var , we add global :
    function sayHelloOne(){
        global $nom;
        return "Hello ' {$nom} '";
    };

    echo sayHelloOne();

    
/////////////////////////////////////////////////////////////////
    function somme($nombre_1, $nombre_2){
        return $nombre_1 + $nombre_2;
    };


    echo "<br />"."<br />"."<br />" . somme(2,5) . "<br />";