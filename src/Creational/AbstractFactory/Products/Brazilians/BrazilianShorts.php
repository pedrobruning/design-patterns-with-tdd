<?php

namespace Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Brazilians;

use Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Shorts;

class BrazilianShorts implements Shorts
{
    public function getName(): string
    {
        return 'Blue';
    }
}