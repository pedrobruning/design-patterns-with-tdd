<?php

require '../../../vendor/autoload.php';

use Bruning\TddDesignPatterns\Creational\FactoryMethod\Creators\BrazilianSoccerChampionshipCreator;
use Bruning\TddDesignPatterns\Creational\FactoryMethod\Creators\WorldCupSoccerChampionshipCreator;

// Create Brazilian Championship
$brazilianTeams = [
    "Coritiba",
    "Flamengo",
    "Athletico",
    "Vasco"
];
$brazilianChampionshipCreator = new BrazilianSoccerChampionshipCreator();
$brazilianChampionship = $brazilianChampionshipCreator->start($brazilianTeams);
var_dump($brazilianChampionship);

// Create World Cup
$worldTeams = [
    "Brazil",
    "Germany",
    "USA",
    "Canada"
];
$worldCupChampionshipCreator = new WorldCupSoccerChampionshipCreator();
$worldCupChampionship = $worldCupChampionshipCreator->start($worldTeams);
var_dump($worldCupChampionship);
