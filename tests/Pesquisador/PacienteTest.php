<?php

namespace tests\Paciente;

use PHPUnit\Framework\TestCase;
use MedHelp\Pesquisador\Paciente;
use PHPUnit\Framework\Attributes\CoversClass;
use MedHelp\Armazenador\Doenca;

#[CoversClass(Paciente::class)]

class PacienteTest extends TestCase
{    
    public function testCriacaoDeObjetos(){        
        $paciente = new Paciente();

        $doenca = $paciente->pesquisarSobreADoenca();

        $this->assertInstanceOf(Paciente::class,$paciente);
        $this->assertInstanceOf(Doenca::class,$doenca);
        
        $this->assertEquals('texto',$paciente->informarSobreADoenca());
        


    }
}