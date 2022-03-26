<?php

namespace Bruning\TddDesignPatterns\Creational\AbstractFactory\Factories;

use Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Italians\ItalianFootbalBoots;
use Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Italians\ItalianShirt;
use Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Italians\ItalianShorts;

class ItalianSoccerTeamUniformFactory implements SoccerTeamUniformFactory
{

    public function createShirt(): string
    {
        return (new ItalianShirt())->getName();
    }

    public function createShorts(): string
    {
        return (new ItalianShorts())->getName();
    }

    public function createFootballBoots(): string
    {
        return (new ItalianFootbalBoots())->getName();
    }
}