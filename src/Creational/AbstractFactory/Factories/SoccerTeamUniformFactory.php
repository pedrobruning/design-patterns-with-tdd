<?php

namespace Bruning\TddDesignPatterns\Creational\AbstractFactory\Factories;

interface SoccerTeamUniformFactory
{
    public function createShirt(): string;
    public function createShorts(): string;
    public function createFootballBoots(): string;
}