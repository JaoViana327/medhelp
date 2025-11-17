<?php
namespace MedHelp\Organizador;

class Desenvolvedor{
    public $nomeDaDoenca:string;
    public $nomeDoPaciente:string;
    public $nomeDoMedico:string;
    public $informacoesSobreADoenca:string;

    public function escreverSobreADoenca(){
        return 'texto';
    };
    public function indicarMedicos():string{
        return $nomeDoMedico;
    };
}