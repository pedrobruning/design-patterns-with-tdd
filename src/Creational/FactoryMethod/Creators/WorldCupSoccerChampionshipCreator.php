<?php

namespace Bruning\TddDesignPatterns\Creational\FactoryMethod\Creators;

use Bruning\TddDesignPatterns\Creational\FactoryMethod\Products\SoccerChampionship;
use Bruning\TddDesignPatterns\Creational\FactoryMethod\Products\WorldCupSoccerChampionship;

class WorldCupSoccerChampionshipCreator extends SoccerChampionshipCreator
{

    function createChampionship(array $teams): SoccerChampionship
    {
        return new WorldCupSoccerChampionship($teams);
    }
}