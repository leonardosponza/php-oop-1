<?php

class Movie {

    public $title;
    public $genre;
    public $durata = 0;
    public $costo;

    function __construct($_name,){
        $this->name = $_name;

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