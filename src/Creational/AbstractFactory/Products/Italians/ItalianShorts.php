<?php

namespace Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Italians;

use Bruning\TddDesignPatterns\Creational\AbstractFactory\Products\Shorts;

class ItalianShorts implements Shorts
{
    public function getName(): string
    {
        return 'Blue';
    }
}