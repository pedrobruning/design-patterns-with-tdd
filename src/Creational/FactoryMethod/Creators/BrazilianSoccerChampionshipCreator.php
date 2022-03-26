<?php

namespace Bruning\TddDesignPatterns\Creational\FactoryMethod\Creators;

use Bruning\TddDesignPatterns\Creational\FactoryMethod\Products\BrazilianSoccerChampionship;
use Bruning\TddDesignPatterns\Creational\FactoryMethod\Products\SoccerChampionship;

class BrazilianSoccerChampionshipCreator extends SoccerChampionshipCreator
{
    function createChampionship(array $teams): SoccerChampionship
    {
        return new BrazilianSoccerChampionship($teams);
    }
}