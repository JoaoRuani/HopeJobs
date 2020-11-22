<?php

use App\Enums\Curriculo\EstadosCivis;
use App\Enums\Curriculo\TiposDeficiencia;

return [

    EstadosCivis::class => [
        EstadosCivis::Solteiro => 'Solteiro(a)',
        EstadosCivis::Casado => 'Casado(a)',
        EstadosCivis::Separado => 'Separado(a)',
        EstadosCivis::Divorciado => 'Divorciado(a)',
        EstadosCivis::Viuvo => 'Viuvo(a)'
    ],
    TiposDeficiencia::class => [
        TiposDeficiencia::Fisica => 'Física',
        TiposDeficiencia::IntelectualMental=> 'Intelectual/Mental'
    ]
];
