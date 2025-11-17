<?php

namespace tests\Armazenador;

use PHPUnit\Framework\TestCase;
use MedHelp\Armazenador\Doenca;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Doenca::class)]

class DoencaTest extends TestCase
{    
    public function testCriacaoDeObjetos(){        
        $doenca = new doenca();

        $this->assertInstanceOf(doenca::class,$doenca);
        
        $doenca->nome = 'Variola';
        
        $this->assertEquals('Variola',$doenca->nome);

        $this->assertEquals(null,$doenca->armazenarDadosNoBancoDeDados());
        $this->assertEquals(null,$doenca->pesquisar(string $nome));
        
    }
}