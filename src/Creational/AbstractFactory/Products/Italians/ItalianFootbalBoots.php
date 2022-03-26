<?php

namespace Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Italians;

use Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\FootbalBoots;

class ItalianFootbalBoots implements FootbalBoots
{
    public function getName(): string
    {
        return 'Blue';
    }
}