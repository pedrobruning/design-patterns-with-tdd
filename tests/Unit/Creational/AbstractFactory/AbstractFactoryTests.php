<?php
namespace Tests\Unit\Creational\AbstractFactory;

use Bruning\TddDesignPatterns\Creational\AbstractFactory\Factories\BrazilianSoccerTeamUniformFactory;
use Bruning\TddDesignPatterns\Creational\AbstractFactory\Factories\ItalianSoccerTeamUniformFactory;
use Bruning\TddDesignPatterns\Creational\AbstractFactory\SoccerTeam;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTests extends TestCase
{
    public function test_should_return_the_whole_brazilian_soccer_uniform()
    {
        $brazilianUniformFactory = new BrazilianSoccerTeamUniformFactory();
        $sut = new SoccerTeam($brazilianUniformFactory);
        $uniform = $sut->getUniform();

        $this->assertEquals('Yellow', $uniform['shirt']);
        $this->assertEquals('Blue', $uniform['shorts']);
        $this->assertEquals('White', $uniform['footballBoots']);
    }

    public function test_should_return_the_whole_italian_soccer_uniform()
    {
        $italianUniformFactory = new ItalianSoccerTeamUniformFactory();
        $sut = new SoccerTeam($italianUniformFactory);
        $uniform = $sut->getUniform();

        $this->assertEquals('Blue', $uniform['shirt']);
        $this->assertEquals('Blue', $uniform['shorts']);
        $this->assertEquals('Blue', $uniform['footballBoots']);
    }
}
