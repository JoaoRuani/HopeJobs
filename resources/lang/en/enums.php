<?php

use App\Enums\Curriculo\EstadosCivis;

return [

    EstadosCivis::class => [
        EstadosCivis::Solteiro => 'Solteiro(a)',
        EstadosCivis::Casado => 'Casado(a)',
        EstadosCivis::Separado => 'Separado(a)',
        EstadosCivis::Divorciado => 'Divorciado(a)',
        EstadosCivis::Viuvo => 'Viuvo(a)'
    ],

];
