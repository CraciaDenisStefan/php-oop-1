<?php

class Movie {
    public $name;
    public $year;
    public $genre;
    public $rating;
    public $network;
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
}

$batman = new Movie ('Cavaliere Oscuro', 2008, 'Fantasy', '5/5', ['Netflix','Prime Video']);
$il_padrino = new Movie ('Il Padrino', 1972, 'Mafia', '5/5', 'Netflix');
$venom = new Movie ('Venom', 2018 ,'Fantasy' ,'4/5', ['Disney Plus', 'Netflix']);


echo '<pre>';
echo '<h1>Titolo:' .$batman->name. '</h1>';
echo '<h4>Anno:' .$batman->year. '</h4>';
echo '<h4>Genere:' .$batman->genre. '</h4>';
echo '<h4>Rating:' .$batman->rating. '</h4>';
echo '<h4>Piattaforma:' .implode(', ', $batman->network). '</h4>';
echo '<h4>Tipologia:' .$batman->vintage. '</h4>';

echo '<h1>Titolo:' .$il_padrino->name. '</h1>';
echo '<h4>Anno:'.$il_padrino->year. '</h4>';
echo '<h4>Genere:'.$il_padrino->genre. '</h4>';
echo '<h4>Rating:'.$il_padrino->rating. '</h4>';
echo '<h4>Piattaforma:'.$il_padrino->network. '</h4>';
echo '<h4>Tipologia:'.$il_padrino->vintage. '</h4>';

echo '<h1>Titolo:' .$venom->name. '</h1>';
echo '<h4>Anno:'.$venom->year. '</h4>';
echo '<h4>Genere:'.$venom->genre. '</h4>';
echo '<h4>Rating:'.$venom->rating. '</h4>';
echo '<h4>Piattaforma:'.implode(', ', $venom->network). '</h4>';
echo '<h4>Tipologia:'.$venom->vintage. '</h4>';

?>