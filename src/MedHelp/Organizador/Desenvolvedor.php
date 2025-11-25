<?php
namespace MedHelp\Organizador;

class Desenvolvedor{
    public string $nomeDaDoenca;
    public string $nomeDoPaciente;
    public string $nomeDoMedico;
    public string $informacoesSobreADoenca;

    public function escreverSobreADoenca(){
        return 'texto';
    }
    public function indicarMedicos():string{
        return $this->nomeDoMedico;
    }
}