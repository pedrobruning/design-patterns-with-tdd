<?php

namespace Bruning\TddDesignPatterns\Creational\AbstractFactory\Factories;

use Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Brazilians\BrazilianFootbalBoots;
use Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Brazilians\BrazilianShirt;
use Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Brazilians\BrazilianShorts;

class BrazilianSoccerTeamUniformFactory implements SoccerTeamUniformFactory
{

    public function createShirt(): string
    {
        return (new BrazilianShirt())->getName();
    }

    public function createShorts(): string
    {
        return (new BrazilianShorts())->getName();
    }

    public function createFootballBoots(): string
    {
        return (new BrazilianFootbalBoots())->getName();
    }
}