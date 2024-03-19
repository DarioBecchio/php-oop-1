<?php
/*
- è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza
  => all'interno della classe è definito un costruttore
  => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/ 
//Modello è Movie

require_once __DIR__ . '/app/Models/Movie.php';
require_once __DIR__ .'/database/db.php';

//Il modello movie ha dentro 2 istanze HarryPotter e Guardiani della galassia 






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

  

  
//var_dump($HarryPotter->getCast());
//var_dump($GuardianOfGalaxy->getCast());

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <header class="bg-dark text-white">
    <nav class="nav justify-content-center">
      <a class="nav-link active" href="#"></a>
      <a class="nav-link " href="#"></a>
      <a class="nav-link disabled" href="#"></a>
    </nav>
  </header>
  <main class= "mt-5">
    <section>
      <div class="container">
        <div class="row row-cols-2 row-cols-lg-5 g-3">
          <?php foreach($movies as $movie) :?>  
            <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h3>
                      <?=$movie->title?>
                    </h3>
                    <p>
                      <?=$movie->overview?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
      </div>
    </section>
  </main>
</body>
</html>
