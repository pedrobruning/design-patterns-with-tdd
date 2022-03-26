<?php

namespace Bruning\TddDesignPatterns\Creational\FactoryMethod\Products;

class WorldCupSoccerChampionship implements SoccerChampionship
{
    public function __construct(private array $teams)
    {
    }

    public function generateBrackets(): array
    {
        return [
            $this->teams[0] . " X " . $this->teams[1],
            $this->teams[2] . " X " . $this->teams[3],
        ];
    }
}