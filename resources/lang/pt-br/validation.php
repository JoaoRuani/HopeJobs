<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'aceito'              => 'O campo: atributo deve ser aceito.' ,
    'active_url'            => 'O campo: attribute não é uma URL válida.' ,
    'após'                 => 'O campo: atributo deve ser uma data posterior a: date.' ,
    'after_or_equal'        => 'O campo: atributo deve ser uma data posterior ou igual a: date.' ,
    'alpha'                 => 'O campo: attribute só pode conter letras.' ,
    'alpha_dash'            => 'O campo: atributo só pode conter letras, números e traços.' ,
    'alpha_num'             => 'O campo: atributo só pode conter letras e números.' ,
    'array'                 => 'O campo: atributo deve ser uma matriz.' ,
    'antes'                => 'O campo: atributo deve ser uma data anterior: data.' ,
    'before_or_equal'       => 'O campo: atributo deve ser uma data anterior ou igual a: date.' ,
    'entre'               => [
        'numérico' => 'O campo: atributo deve ser entre: min e: max.' ,
        'arquivo'     => 'O campo: atributo deve ser entre: min e: max kilobytes.' ,
        'string'   => 'O campo: atributo deve ser entre: min e: max caracteres.' ,
        'array'    => 'O campo: atributo devedor entre: min e: itens máximos.' ,
    ],
    'boolean'               => 'O campo: attribute deve ser verdadeiro ou falso.' ,
    'confirmado'             => 'O campo: atributo de confirmação não confere.' ,
    'date'                  => 'O campo: attribute não é uma data válida.' ,
    'date_format'           => 'O campo: atributo não corresponde ao formato: formato.' ,
    'different'             => 'Os campos: attribute e: other devem ser diferentes.' ,
    'dígitos'                => 'O campo: programador de atributo: dígitos dígitos.' ,
    'digits_between'        => 'O campo: atributo deve ter entre: min e: max dígitos.' ,
    'dimensões'            => 'O campo: atributo tem dimensões de imagem verdadeiro.' ,
    ' Distintos '              => 'O campo: atributo campo tem um valor duplicado.' ,
    'email'                 => 'O campo: o atributo deve ser um endereço de e-mail válido.' ,
    'existe'                => 'O campo: atributo selecionado é inválido.' ,
    'arquivo'                  => 'O campo: atributo deve ser um arquivo.' ,
    'preenchido'                => 'O campo: atributo deve ter um valor.' ,
    'imagem'                 => 'O campo: atributo deve ser uma imagem.' ,
    'in'                    => 'O campo: atributo selecionado é inválido.' ,
    'in_array'              => 'O campo: atributo não existe em: outro.' ,
    'inteiro'               => 'O campo: atributo deve ser um número inteiro.' ,
    'ip'                    => 'O campo: atributo deve ser um endereço de IP válido.' ,
    'ipv4'                  => 'O campo: o atributo deve ser um endereço IPv4 válido.' ,
    'ipv6'                  => 'O campo: o atributo deve ser um endereço IPv6 válido.' ,
    'json'                  => 'O campo: o atributo deve ser uma string JSON válida.' ,
    'max'                   => [
        'numérico' => 'O campo: atributo não pode ser superior a: max.' ,
        'arquivo'     => 'O campo: atributo não pode ser superior a: max kilobytes.' ,
        'string'   => 'O campo: atributo não pode ser superior a: caracteres max.' ,
        'array'    => 'O campo: atributo não pode ter mais do que: itens máximos.' ,
    ],
    'mimes'                 => 'O campo: atributo deve ser um arquivo do tipo:: valores.' ,
    'mimetypes'             => 'O campo: atributo deve ser um arquivo do tipo: valores.' ,
    'min'                   => [
        'numeric' => 'O campo: attribute deve ser pelo menos: min.' ,
        'arquivo'     => 'O campo: atributo deve ter pelo menos: min kilobytes.' ,
        'string'   => 'O campo: atributo deve ter pelo menos: min caracteres.' ,
        'array'    => 'O campo: atributo deve ter pelo menos: itens mínimos.' ,
    ],
    'not_in'                => 'O campo: atributo selecionado é inválido.' ,
    'numeric'               => 'O campo: attribute deve ser um número.' ,
    'presente'               => 'O campo: o atributo deve estar presente.' ,
    'regex'                 => 'O campo: atributo tem um formato inválido.' ,
    'obrigatório'              => 'O campo: attribute é obrigatório.' ,
    'required_if'           => 'O campo: attribute é obrigatório quando: other for: value.' ,
    'required_unless'       => 'O campo: attribute é obrigatório exceto quando: other for: values.' ,
    'required_with'         => 'O campo: attribute é obrigatório quando: values ​​está presente.' ,
    'required_with_all'     => 'O campo: attribute é obrigatório quando: values ​​está presente.' ,
    'required_without'      => 'O campo: attribute é obrigatório quando: values ​​não está presente.' ,
    'required_without_all' => 'O campo: attribute é obrigatório quando nenhum dos: values ​​estão presentes.' ,
    'same'                  => 'Os campos: attribute e: other devem corresponder.' ,
    'tamanho'                  => [
        'numérico' => 'O campo: atributo deve ser: tamanho.' ,
        'arquivo'     => 'O campo: atributo deve ser: tamanho kilobytes.' ,
        'string'   => 'O campo: atributo deve ser: caracteres de tamanho.' ,
        'array'    => 'O campo: atributo deve conter: itens de tamanho.' ,
    ],
    'string'                => 'O campo: atributo deve ser uma string.' ,
    'timezone'              => 'O campo: o atributo deve ser uma zona válida.' ,
    'unique'                => 'O campo: atributo já está sendo utilizado.' ,
    'Upload'              => 'Ocorreu uma falha no upload do campo: atributo.' ,
    'url'                   => 'O campo: atributo tem um formato inválido.' ,

    /*
    | ------------------------------------------------- -------------------------
    | Linhas de linguagem de validação personalizada
    | ------------------------------------------------- -------------------------
    |
    | Aqui você pode especificar mensagens de validação personalizadas para atributos usando o
    | convenção "attribute.rule" para nomear as linhas. Isso torna mais rápido
    | especificar uma linha de idioma personalizada específica para uma determinada regra de atributo.
    |
    * /

    'custom' => [
        'nome do atributo' => [
            'regra-nome' => 'mensagem personalizada' ,
        ],
    ],

    / *
    | ------------------------------------------------- -------------------------
    | Atributos de validação personalizados
    | ------------------------------------------------- -------------------------
    |
    | As seguintes linhas de linguagem são usadas para trocar os marcadores de posição de atributos
    | com algo mais fácil de ler, como endereço de e-mail.
    | de "e-mail". Isso simplesmente nos ajuda a tornar as mensagens um pouco mais claras.
    |
    */

    'atributos' => [],

];
