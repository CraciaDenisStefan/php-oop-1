<?php
class Movie {
    public $name;
    public $year;
    public $genre;
    public $rating;
    public $network;
    public $cast;
    public $vintage;

    function __construct($name, $year, $genre, $rating, $network){
        $this-> name = $name;
        $this-> year = $year;
        $this-> genre = $genre;
        $this-> rating = $rating;
        $this-> network = $network;
        $this-> setOld();
    }
    public function setOld(){
        if($this-> year < 2000){
            $this->vintage='Vintage';
        }else{
            $this->vintage='Modern';
        }
    }
    public function getOld(){
        return $this-> vintage;
    }
};
?>