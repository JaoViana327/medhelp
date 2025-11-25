<?php
namespace MedHelp\Armazenador;

class BancoDeDados{
    public string $informacoesSobreADoenca;

    public function fornecerInformacoesSobreADoenca():string{
        return 'informacaosobreadoenca';
    }
}