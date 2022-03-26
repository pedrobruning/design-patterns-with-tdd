<?php

namespace Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Italians;

use Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Shirt;

class ItalianShirt implements Shirt
{
    public function getName(): string
    {
        return 'Blue';
    }
}