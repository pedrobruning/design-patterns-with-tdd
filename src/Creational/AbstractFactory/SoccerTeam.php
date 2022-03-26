<?php

namespace Bruning\TddDesignPatterns\Creational\AbstractFactory;

use Bruning\TddDesignPatterns\Creational\AbstractFactory\Factories\SoccerTeamUniformFactory;

class SoccerTeam
{
    public function __construct(private SoccerTeamUniformFactory $soccerTeamUniformFactory)
    {
    }

    public function getUniform(): array
    {
        $result = [];
        $result['shirt'] = $this->soccerTeamUniformFactory->createShirt();
        $result['shorts'] = $this->soccerTeamUniformFactory->createShorts();
        $result['footballBoots'] = $this->soccerTeamUniformFactory->createFootballBoots();
        return $result;
    }
}