<?php

namespace Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Brazilians;

use Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\FootbalBoots;

class BrazilianFootbalBoots implements FootbalBoots
{
    public function getName(): string
    {
        return 'White';
    }
}