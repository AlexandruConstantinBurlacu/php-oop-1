<?php

class Movie{
    public $titolo;
    public $anno;
    public $genere;
    public $voto;

    public function __construct($titolo, $anno, $genere, $voto) {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->genere = $genere;
        $this->voto = $voto;
    }
}

$movie1 = new Movie("Godzilla e Kong - Il nuovo impero", 2024, "Azione, Fantascienza, Avventura", 7);
var_dump($movie1);

$movie2 = new Movie("Fight Club", 1999, "Dramma", 8);
var_dump($movie2);

$movies = [
    $movie1,
    $movie2,
];
var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <h1>
        Movie Info
    </h1>
</body>
</html>