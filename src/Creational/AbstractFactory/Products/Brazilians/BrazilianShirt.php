<?php

namespace Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Brazilians;

use Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Shirt;

class BrazilianShirt implements Shirt
{
    public function getName(): string
    {
        return 'Yellow';
    }
}