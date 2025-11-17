<?php

namespace MedHelp\Pesquisador;
use MedHelp\Armazenador\Doenca;

  class Paciente {
    public function pesquisarSobreADoenca():Doenca{

      return new Doenca();

    };
    public function informarSobreADoenca(){
        return 'texto';
    }

  }