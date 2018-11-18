<?php
require 'vendor/autoload.php';

$swEnciclopedia = new \SW\StarWarsEnciclopedia();

$planetas = $swEnciclopedia->getPlanetas(4);

echo "PLANETAS QUE SALEN EN LA PELICULA 'LA AMENAZA FANTASMA':\n";
foreach ($planetas as $planeta) {
    echo $planeta->getName() . "\n";
}
