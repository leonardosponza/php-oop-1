<?php

class Movie {

    public $title;
    public $genre;
    public $durata = 0;
    public $costo;
    public $director;

    function __construct($_title,$_director){
        $this->title = $_title;
        $this->director = $_director;

    }

    public function setDurata($_durata){
        $this->durata=$_durata;
    }

    public function getDurata(){
        return $this->durata;
    }

    public function setCosto($_costo){
        $this->costo=$_costo;
    }

    public function getCosto(){
        return $this->costo;
    }
}

$LOTR = new Movie('lord of the rings',2002); 
$LOTR->genre = "fantasy";
$LOTR->durata = 180;
$LOTR->setCosto(9);
var_dump($LOTR);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>