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

    'accepted'              => 'O campo :attribute deve ser aceito.' ,
    'active_url'            => 'O campo :attribute não é uma URL válida.' ,
    'after'                 => 'O campo :attribute deve ser uma data posterior a: date.' ,
    'after_or_equal'        => 'O campo :attribute deve ser uma data posterior ou igual a: date.' ,
    'alpha'                 => 'O campo :attribute só pode conter letras.' ,
    'alpha_dash'            => 'O campo :attribute só pode conter letras, números e traços.' ,
    'alpha_num'             => 'O campo :attribute só pode conter letras e números.' ,
    'array'                 => 'O campo :attribute deve ser uma matriz.' ,
    'antes'                => 'O campo :attribute deve ser uma data anterior: data.' ,
    'before_or_equal'       => 'O campo :attribute deve ser uma data anterior ou igual a: date.' ,
    'between'               => [
        'numeric' => 'O campo :attribute deve ser entre :min e :max.' ,
        'file'     => 'O campo :attribute deve ser entre :min e :max kilobytes.' ,
        'string'   => 'O campo :attribute deve ser entre :min e :max caracteres.' ,
        'array'    => 'O campo :attribute devedor entre :min e :max itens máximos.' ,
    ],
    'boolean'               => 'O campo :attribute deve ser verdadeiro ou falso.' ,
    'confirmed'             => 'O campo :attribute de confirmação não confere.' ,
    'date'                  => 'O campo :attribute não é uma data válida.' ,
    'date_format'           => 'O campo :attribute não corresponde ao formato: formato.' ,
    'different'             => 'Os campos :attribute e :other devem ser diferentes.' ,
    'digits'                => 'O campo: programador de atributo :digits dígitos.' ,
    'digits_between'        => 'O campo :attribute deve ter entre :min e :max dígitos.' ,
    'dimensions'            => 'O campo :attribute tem dimensões de imagem verdadeiro.' ,
    'distinct'              => 'O campo :attribute campo tem um valor duplicado.' ,
    'ends_with'              => 'O campo :attribute deve terminar com os valores :values.' ,
    'email'                 => 'O campo: o atributo deve ser um endereço de e-mail válido.' ,
    'exists'                => 'O campo :attribute selecionado é inválido.' ,
    'file'                  => 'O campo :attribute deve ser um arquivo.' ,
    'filled'                => 'O campo :attribute deve ter um valor.' ,
    'image'                 => 'O campo :attribute deve ser uma imagem.' ,
    'in'                    => 'O campo :attribute selecionado é inválido.' ,
    'in_array'              => 'O campo :attribute não existe em: outro.' ,
    'integer'               => 'O campo :attribute deve ser um número inteiro.' ,
    'ip'                    => 'O campo :attribute deve ser um endereço de IP válido.' ,
    'ipv4'                  => 'O campo: o atributo deve ser um endereço IPv4 válido.' ,
    'ipv6'                  => 'O campo: o atributo deve ser um endereço IPv6 válido.' ,
    'json'                  => 'O campo: o atributo deve ser uma string JSON válida.' ,
    'max'                   => [
        'numeric' => 'O campo :attribute não pode ser superior a :max.' ,
        'file'     => 'O campo :attribute não pode ser superior a :max kilobytes.' ,
        'string'   => 'O campo :attribute não pode ser superior a :max caracteres.' ,
        'array'    => 'O campo :attribute não pode ter mais do que :max itens máximos.' ,
    ],
    'mimes'                 => 'O campo :attribute deve ser um arquivo do tipo :values.' ,
    'mimetypes'             => 'O campo :attribute deve ser um arquivo do tipo :values.' ,
    'min'                   => [
        'numeric' => 'O campo :attribute deve ser pelo menos :min.' ,
        'file'     => 'O campo :attribute deve ter pelo menos :min kilobytes.' ,
        'string'   => 'O campo :attribute deve ter pelo menos :min caracteres.' ,
        'array'    => 'O campo :attribute deve ter pelo menos :items mínimos.' ,
    ],
    'not_in'                => 'O campo :attribute selecionado é inválido.' ,
    'numeric'               => 'O campo :attribute deve ser um número.' ,
    'present'               => 'O campo: o atributo deve estar presente.' ,
    'regex'                 => 'O campo :attribute tem um formato inválido.' ,
    'required'              => 'O campo :attribute é obrigatório.' ,
    'required_if'           => 'O campo :attribute é obrigatório quando :other for :value.' ,
    'required_unless'       => 'O campo :attribute é obrigatório exceto quando :other for :values.' ,
    'required_with'         => 'O campo :attribute é obrigatório quando :values está presente.' ,
    'required_with_all'     => 'O campo :attribute é obrigatório quando :values está presente.' ,
    'required_without'      => 'O campo :attribute é obrigatório quando :values não está presente.' ,
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values estão presentes.' ,
    'same'                  => 'Os campos :attribute e :other devem corresponder.' ,
    'size'                  => [
        'numeric' => 'O campo :attribute deve ser :size.' ,
        'file'     => 'O campo :attribute deve ser :size kilobytes.' ,
        'string'   => 'O campo :attribute deve ser :size de tamanho.' ,
        'array'    => 'O campo :attribute deve conter :size de tamanho.' ,
    ],
    'string'                => 'O campo :attribute deve ser uma string.' ,
    'timezone'              => 'O campo: o atributo deve ser uma zona válida.' ,
    'unique'                => 'O campo :attribute já está sendo utilizado.' ,
    'Upload'              => 'Ocorreu uma falha no upload do campo :attribute.' ,
    'url'                   => 'O campo :attribute tem um formato inválido.' ,

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

    'attributes' => [
        'formacoes.*.instituicao' => 'Instituição',
        'formacoes.*.curso' => 'Curso',
        'formacoes.*.inicio' => 'Início',
        'experiencias.*.descricao' => 'Descrição',
        'experiencias.*.cargo' => 'Cargo',
        'experiencias.*.empresa' => 'Empresa',
        'experiencias.*.nivel' => 'Nível',
        'experiencias.*.area' => 'Area',
        'experiencias.*.inicio' => 'Data de Inicio',
        'experiencias.*.saida' => 'Data de Saída'
    ],


    'experiencias.*.descricao' => ['required'],
    'experiencias.*.cargo' => ['required'],
    'experiencias.*.empresa' => ['required'],
    'experiencias.*.nivel' => ['required'],
    'experiencias.*.area' => ['nullable'],
    'experiencias.*.inicio' => ['required', 'date'],
    'experiencias.*.saida' => ['nullable', 'date'],
    'experiencias.*.cargo_atual' => ['nullable', 'bool']

];
