<?php
/*
- è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza
  => all'interno della classe è definito un costruttore
  => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/ 
//Modello è Movie
class Movie {
    public $title;
    public $duration;
    public $cast;
    public $overview;
    
    function __construct($title,$duration,$cast,$overview)
    {
      //select an object property inside a class using the $this variable
      //$this refers alwaysto an object
      $this->title = $title;
      $this->duration = $duration;
      $this->cast = $cast;
      $this->overview =$overview;
    }
    public function getCast()
      //getter function
      {
          return $this->cast;
      }
  

};

//Il modello movie ha dentro 2 istanze HarryPotter e Guardiani della galassia 
$HarryPotter = new Movie("Harry Potter E il principe mezzosangue",120,[	
    'Daniel Radcliffe',
    'Rupert Grint',
    'Emma Watson',
    'Jim Broadbent',
    'Helena Bonham Carter',
    'Robbie Coltrane',
    'Warwick Davis',
    'Michael Gambon',
    'Alan Rickman',
    'Maggie Smith',
    'Timothy Spall',
    'David Thewlis',
    'Julie Walters'],
    "lorem ipsum dolor" );
  
$GuardianOfGalaxy = new Movie("Guardiani della galassia vol.2",100,['Chris Pratt',
    'Zoe Saldaña',
    'Dave Bautista',
    'Vin Diesel',
    'Bradley Cooper',
    'Michael Rooker',
    'Karen Gillan',
    'Pom Klementieff',
    'Sylvester Stallone',
    'Kurt Russell'],"lorem ipsum dolor" );





    /*
$HarryPotter->title = "Harry Potter E il principe mezzosangue"; 
$HarryPotter->duration = 120;
$HarryPotter->overview ="lorem ipsum dolor";
$HarryPotter->cast=[	
  'Daniel Radcliffe',
  'Rupert Grint',
  'Emma Watson',
  'Jim Broadbent',
  'Helena Bonham Carter',
  'Robbie Coltrane',
  'Warwick Davis',
  'Michael Gambon',
  'Alan Rickman',
  'Maggie Smith',
  'Timothy Spall',
  'David Thewlis',
  'Julie Walters'];
$GuardianOfGalaxy->title = "Guardiani della galassia vol.2";  
  $GuardianOfGalaxy->duration = 100;
  $GuardianOfGalaxy->overview =" lorem ipsum dolor";
  $GuardianOfGalaxy->cast = [	

  'Chris Pratt',
  'Zoe Saldaña',
  'Dave Bautista',
 'Vin Diesel',
  'Bradley Cooper',
  'Michael Rooker',
  'Karen Gillan',
  'Pom Klementieff',
  'Sylvester Stallone',
  'Kurt Russell'];*/


  //var_dump($HarryPotter , $GuardianOfGalaxy);



var_dump($HarryPotter->getCast());
var_dump($GuardianOfGalaxy->getCast());

?>

