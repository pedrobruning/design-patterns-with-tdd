<?php

namespace Bruning\TddDesignPatterns\Creational\FactoryMethod\Creators;

use Bruning\TddDesignPatterns\Creational\FactoryMethod\Products\SoccerChampionship;

abstract class SoccerChampionshipCreator
{
    abstract function createChampionship(array $teams): SoccerChampionship;

    public function start(array $teams): array
    {
        $championship = $this->createChampionship($teams);
        $brackets = $championship->generateBrackets();

        return [
            'brackets' => $brackets
        ];
    }
}