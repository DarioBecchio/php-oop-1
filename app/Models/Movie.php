<?php
/**
 * Class Movie
 */
class Movies {
    /*public $title;
    public $duration;
    public $cast;
    public $overview;*/
    
    function __construct(public $title, public $duration, public $cast,public $overview)
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