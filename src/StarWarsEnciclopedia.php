<?php
namespace SW;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use SW\Entity\Planeta;

class StarWarsEnciclopedia
{
    private CONST API_URL = "https://swapi.co/api/";
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getPlanetas(int $idPelicula): array
    {
        $planetas = [];

        try {
            $res = $this->client->request('GET', self::API_URL . "films/$idPelicula");
        } catch (ClientException $exception) {
            die("SE HA PRODUCIDO UN ERROR AL LLAMAR AL API PARA RECUPERAR INFORMACION DE PELICULA");
        }

        if ($res->getStatusCode() == 200) {
            $movieInfo = json_decode($res->getBody(), true);
            $idPlanetas = array_map(
                function($url) {
                    //nos quedamos con el id de cada planeta
                    return rtrim(substr($url, strrpos(substr($url, 0, -1), '/')+1), '/') ;
                },
                $movieInfo['planets']
            );
            foreach ($idPlanetas as $idPlaneta) {
                $planetas[] = $this->getPlaneta($idPlaneta);
            }
        }

        return $planetas;
    }

    private function getPlaneta(int $idPlaneta): Planeta
    {
        try {
            $res = $this->client->request('GET', self::API_URL . "planets/$idPlaneta");
        } catch (ClientException $exception) {
            die("SE HA PRODUCIDO UN ERROR AL LLAMAR AL API PARA RECUPERAR INFORMACION DE PLANETAS");
        }
        if ($res->getStatusCode() == 200) {
            $planetInfo = json_decode($res->getBody(), true);
            return new Planeta($planetInfo['name'], $planetInfo['population']);
        }
    }
}
