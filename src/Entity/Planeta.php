<?php
namespace SW\Entity;

class Planeta
{
    private $name;
    private $poblacion;

    public function __construct(string $name, int $poblacion)
    {

        $this->name = $name;
        $this->poblacion = $poblacion;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPoblacion(): int
    {
        return $this->poblacion;
    }
}
