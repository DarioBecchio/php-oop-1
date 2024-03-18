<?php
/*
- è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza
  => all'interno della classe è definito un costruttore
  => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/ 

class Movie {
    public $genre;
    public $length;
    
    /*public function setDurationLevel($length)
    {
        if ($length > 100){
            
        }
    };*/
  

};
//echo Movie::$kindOf;

$HarryPotter = new Movie();
$GuardianOfGalaxy = new Movie();


$HarryPotter->genre = "Fantasy"; 
$HarryPotter->length = 120;
$GuardianOfGalaxy->genre = "Action";
$GuardianOfGalaxy->length = 100;

var_dump($HarryPotter);


