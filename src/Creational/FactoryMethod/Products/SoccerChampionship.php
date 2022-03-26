<?php

namespace Bruning\TddDesignPatterns\Creational\FactoryMethod\Products;

interface SoccerChampionship
{
    public function generateBrackets(): array;
}