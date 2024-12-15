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

    'accepted' => 'O campo :attribute tem de ser aceite.',
    'accepted_if' => 'O campo :attribute tem de ser aceite quando :other é :value.',
    'active_url' => 'O campo :attribute tem de ser um URL válido.',
    'after' => 'O campo :attribute tem de ser uma data posterior a :date.',
    'after_or_equal' => 'O campo :attribute tem de ser uma data posterior ou igual a :date.',
    'alpha' => 'O campo :attribute só pode conter letras.',
    'alpha_dash' => 'O campo :attribute só pode conter letras, números, hífens e sublinhados.',
    'alpha_num' => 'O campo :attribute só pode contar letras e números.',
    'array' => 'O campo :attribute tem de ser um array.',
    'ascii' => 'O campo :attribute só pode conter caracteres alfanuméricos e símbolos.',
    'before' => 'O campo :attribute tem de ser uma data anterior a :date.',
    'before_or_equal' => 'O campo :attribute tem de ser uma data anterior ou igual a :date.',
    'between' => [
        'array' => 'O campo :attribute tem de ter entre :min a :max items.',
        'file' => 'O campo :attribute tem de ter entre :min e :max kilobytes.',
        'numeric' => 'O campo :attribute tem de ser entre :min e :max.',
        'string' => 'O campo :attribute tem de ter entre :min e :max characters.',
    ],
    'boolean' => 'O campo :attribute tem de ser verdadeiro ou falso.',
    'can' => 'O campo :attribute contém um valor não permitido.',
    'confirmed' => 'A confirmação do campo :attribute não corresponde.',
    'contains' => 'O campo :attribute está em falta de um valor necessário.',
    'current_password' => 'A palavra-passe está incorreta.',
    'date' => 'O campo :attribute tem de ser uma data válida.',
    'date_equals' => 'O campo :attribute tem de ser uma data igual a :date.',
    'date_format' => 'O campo :attribute tem de corresponder ao formato :format.',
    'decimal' => 'O campo :attribute tem de ter :decimal casas decimais.',
    'declined' => 'O campo :attribute tem de ser recusado.',
    'declined_if' => 'O campo :attribute tem de ser recusado quando :other é :value.',
    'different' => 'Os campos :attribute e :other têm de ser diferentes.',
    'digits' => 'O campo :attribute tem de ter :digits dígitos.',
    'digits_between' => 'O campo :attribute tem de ter entre :min e :max dígitos.',
    'dimensions' => 'O campo :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute tem um valor duplicado.',
    'doesnt_end_with' => 'O campo :attribute não pode terminar com um dos seguintes: :values.',
    'doesnt_start_with' => 'O campo :attribute não pode começar com um dos seguintes: :values.',
    'email' => 'O campo :attribute tem de ser um endereço de e-mail válido.',
    'ends_with' => 'O campo :attribute tem de terminar com um dos seguintes: :values.',
    'enum' => 'O campo :attribute selecionado é inválido.',
    'exists' => 'O campo :attribute selecionado é inválido.',
    'extensions' => 'O campo :attribute tem de ter uma das seguintes extensões: :values.',
    'file' => 'O campo :attribute tem de ser um ficheiro.',
    'filled' => 'O campo :attribute tem de ter um valor.',
    'gt' => [
        'array' => 'O campo :attribute tem de ter mais de :value itens.',
        'file' => 'O campo :attribute tem de ser maior do que :value kilobytes.',
        'numeric' => 'O campo :attribute tem de ser maior do que :value.',
        'string' => 'O campo :attribute tem de ter mais de :value caracteres.',
    ],
    'gte' => [
        'array' => 'O campo :attribute tem de ter :value itens ou mais.',
        'file' => 'O campo :attribute tem de ser maior ou igual a :value kilobytes.',
        'numeric' => 'O campo :attribute tem de ser maior ou igual a :value.',
        'string' => 'O campo :attribute tem de ter no mínimo :value caracteres.',
    ],
    'hex_color' => 'O campo :attribute tem de ser uma cor hexadecimal válida.',
    'image' => 'O campo :attribute tem de ser uma imagem.',
    'in' => 'O campo :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute tem de existir em :other.',
    'integer' => 'O campo :attribute tem de ser um número inteiro.',
    'ip' => 'O campo :attribute tem de ser um endereço IP válido.',
    'ipv4' => 'O campo :attribute tem de ser um endereço IPv4 válido.',
    'ipv6' => 'O campo :attribute tem de ser um endereço IPv6 válido.',
    'json' => 'O campo :attribute tem de ser uma string JSON válida.',
    'list' => 'O campo :attribute tem de ser uma lista.',
    'lowercase' => 'O campo :attribute tem de estar em minúsculas.',
    'lt' => [
        'array' => 'O campo :attribute tem de ter menos de :value itens.',
        'file' => 'O campo :attribute tem de ser menor do que :value kilobytes.',
        'numeric' => 'O campo :attribute tem de ser menor do que :value.',
        'string' => 'O campo :attribute tem de ter menos de :value caracteres.',
    ],
    'lte' => [
        'array' => 'O campo :attribute não pode ter mais de :value itens.',
        'file' => 'O campo :attribute tem de ser menor ou igual a :value kilobytes.',
        'numeric' => 'O campo :attribute tem de ser menor ou igual a :value.',
        'string' => 'O campo :attribute tem de ter no máximo :value caracteres.',
    ],
    'mac_address' => 'O campo :attribute tem de ser um endereço MAC válido.',
    'max' => [
        'array' => 'O campo :attribute não pode ter mais de :max itens.',
        'file' => 'O campo :attribute não pode ser maior do que :max kilobytes.',
        'numeric' => 'O campo :attribute não pode ser maior do que :max.',
        'string' => 'O campo :attribute não pode ter mais de :max caracteres.',
    ],
    'max_digits' => 'O campo :attribute não pode ter mais de :max dígitos.',
    'mimes' => 'O campo :attribute tem de ser um ficheiro do tipo: :values.',
    'mimetypes' => 'O campo :attribute tem de ser um ficheiro do tipo: :values.',
    'min' => [
        'array' => 'O campo :attribute tem de ter pelo menos :min itens.',
        'file' => 'O campo :attribute tem de ter pelo menos :min kilobytes.',
        'numeric' => 'O campo :attribute tem de ser no mínimo :min.',
        'string' => 'O campo :attribute tem de ter pelo menos :min caracteres.',
    ],
    'min_digits' => 'O campo :attribute tem de ter pelo menos :min dígitos.',
    'missing' => 'O campo :attribute tem de estar ausente.',
    'missing_if' => 'O campo :attribute tem de estar ausente quando :other é :value.',
    'missing_unless' => 'O campo :attribute tem de estar ausente a menos que :other seja :value.',
    'missing_with' => 'O campo :attribute tem de estar ausente quando :values está presente.',
    'missing_with_all' => 'O campo :attribute tem de estar ausente quando todos os valores :values estão presentes.',
    'multiple_of' => 'O campo :attribute tem de ser um múltiplo de :value.',
    'not_in' => 'O campo :attribute selecionado é inválido.',
    'not_regex' => 'O formato do campo :attribute é inválido.',
    'numeric' => 'O campo :attribute tem de ser um número.',
'password' => [
    'letters' => 'O campo :attribute tem de conter pelo menos uma letra.',
    'mixed' => 'O campo :attribute tem de conter pelo menos uma letra maiúscula e uma minúscula.',
    'numbers' => 'O campo :attribute tem de conter pelo menos um número.',
    'symbols' => 'O campo :attribute tem de conter pelo menos um símbolo.',
    'uncompromised' => 'O campo :attribute foi comprometido em uma violação de dados. Escolha outro valor.',
    ],
    'present' => 'O campo :attribute tem de estar presente.',
    'present_if' => 'O campo :attribute tem de estar presente quando :other é :value.',
    'present_unless' => 'O campo :attribute tem de estar presente a menos que :other seja :value.',
    'present_with' => 'O campo :attribute tem de estar presente quando :values está presente.',
    'present_with_all' => 'O campo :attribute tem de estar presente quando todos os valores :values estão presentes.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando :other é :value.',
    'prohibited_unless' => 'O campo :attribute é proibido a menos que :other esteja em :values.',
    'prohibits' => 'O campo :attribute proíbe que :other esteja presente.',
    'regex' => 'O formato do campo :attribute é inválido.',
    'required' => 'O campo :attribute é de preenchimento obrigatório.',
    'required_array_keys' => 'O campo :attribute tem de conter entradas para: :values.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_if_accepted' => 'O campo :attribute é obrigatório quando :other é aceite.',
    'required_if_declined' => 'O campo :attribute é obrigatório quando :other é recusado.',
    'required_unless' => 'O campo :attribute é obrigatório a menos que :other esteja em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando todos os valores :values estão presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos valores :values está presente.',
    'same' => 'O campo :attribute tem de corresponder a :other.',
    'size' => [
        'array' => 'O campo :attribute tem de conter :size itens.',
        'file' => 'O campo :attribute tem de ter :size kilobytes.',
        'numeric' => 'O campo :attribute tem de ser :size.',
        'string' => 'O campo :attribute tem de ter :size caracteres.',
    ],
    'starts_with' => 'O campo :attribute tem de começar com um dos seguintes valores: :values.',
    'string' => 'O campo :attribute tem de ser uma cadeia de texto.',
    'timezone' => 'O campo :attribute tem de ser um fuso horário válido.',
    'unique' => 'O campo :attribute já está a ser utilizado.',
    'uploaded' => 'O carregamento do campo :attribute falhou.',
    'uppercase' => 'O campo :attribute tem de estar em maiúsculas.',
    'url' => 'O campo :attribute tem de ser um URL válido.',
    'ulid' => 'O campo :attribute tem de ser um ULID válido.',
    'uuid' => 'O campo :attribute tem de ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
