<?php

namespace tests\Organizador;

use PHPUnit\Framework\TestCase;
use MedHelp\Organizador\Desenvolvedor;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Desenvolvedor::class)]

class DesenvolvedorTest extends TestCase
{    
    public function testCriacaoDeObjetos(){        
        $desenvolvedor = new Desenvolvedor();

        $this->assertInstanceOf(Desenvolvedor::class,$desenvolvedor);
        
        $desenvolvedor->nomeDaDoenca = 'Variola';
        $desenvolvedor->nomeDoPaciente = 'Joao';
        $desenvolvedor->nomeDoMedico = 'Satoru_Gojo';
        $desenvolvedor->informacoesSobreADoenca = 'Perigosa';
        
        $this->assertEquals('Variola',$desenvolvedor->nomeDaDoenca);
        $this->assertEquals('Joao',$desenvolvedor->nomeDoPaciente);
        $this->assertEquals('Satoru_Gojo',$desenvolvedor->nomeDoMedico);
        $this->assertEquals('Perigosa',$desenvolvedor->informacoesSobreADoenca);

        $this->assertEquals('Texto',$desenvolvedor->escreverSobreADoenca());
        $this->assertEquals($nomeDoMedico,$desenvolvedor->indicarMedicos());


    }
}