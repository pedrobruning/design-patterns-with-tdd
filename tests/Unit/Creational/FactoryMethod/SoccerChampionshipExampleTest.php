<?php

namespace Tests\Unit\Creational\FactoryMethod;

use Bruning\TddDesignPatterns\Creational\FactoryMethod\Creators\BrazilianSoccerChampionshipCreator;
use Bruning\TddDesignPatterns\Creational\FactoryMethod\Creators\WorldCupSoccerChampionshipCreator;
use PHPUnit\Framework\TestCase;

class SoccerChampionshipExampleTest extends TestCase
{
    public function test_brazilian_championship_should_create_brackets_successfully()
    {
        $teams = [
            "Team 1", "Team 2", "Team 3", "Team 4"
        ];

        $sut = new BrazilianSoccerChampionshipCreator();

        $championship = $sut->start($teams);

        $this->assertIsArray($championship);

        $this->assertCount(3, $championship['brackets']);
    }

    public function test_world_championship_should_create_brackets_successfully()
    {
        $teams = [
            "Team 1", "Team 2", "Team 3", "Team 4"
        ];

        $sut = new WorldCupSoccerChampionshipCreator($teams);

        $championship = $sut->start($teams);

        $this->assertIsArray($championship);

        $this->assertCount(2, $championship['brackets']);
    }

}