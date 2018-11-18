<?php
use GuzzleHttp\Client;

require 'vendor/autoload.php';

$apiUrl = "https://swapi.co/api/";

$client = new Client();

//hacemos la petición a un endpoint invalido
$res = $client->request('GET', $apiUrl . 'peopleee/1');

echo "El nombre del personaje con ID 1 es: " . json_decode($res->getBody(), true)['name'] . "\n";
