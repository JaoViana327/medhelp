<?php

namespace tests\Armazenador;

use PHPUnit\Framework\TestCase;
use MedHelp\Armazenador\BancoDeDados;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(BancoDeDados::class)]

class BancoDeDadosTest extends TestCase
{    
    public function testCriacaoDeObjetos(){        
        $bancodedados = new BancoDeDados();

        $this->assertInstanceOf(BancoDeDados::class,$bancodedados);
        
        $bancodedados->informacoesSobreADoenca = 'Perigosa';
        
        $this->assertEquals('Perigosa',$bancodedados->informacoesSobreADoenca);
        
        $this->assertEquals('informacaosobreadoenca', $bancodedados->fornecerInformacoesSobreADoenca());


    }
}