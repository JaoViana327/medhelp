<?php
namespace MedHelp\Armazenador;

class BancoDeDados{
    public $informacoesSobreADoenca:string;

    public function fornecerInformacoesSobreADoenca():string{
        return 'informacaosobreadoenca';
    };
}