<?php

namespace App\Enums\Curriculo;

use BenSampo\Enum\Enum;

final class Generos extends Enum
{
    const Homem = 0;
    const Mulher =   1;
    const HomemTrans = 2;
    const MulherTrans = 3;
    const Intergenero = 4;
    const SemGenero = 5;
}
