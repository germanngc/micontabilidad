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

    'accepted' => 'El campo :attribute debe aceptarse.',
    'active_url' => 'El campo :attribute no es una URL valida.',
    'after' => 'El campo :attribute debe ser una fecha después de :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha igual o después de :date.',
    'alpha' => 'El campo :attribute solo debe contener letras.',
    'alpha_dash' => 'El campo :attribute solo debe contener letras, números, guiones medio y bajos.',
    'alpha_num' => 'El campo :attribute solo debe contener letras y números.',
    'array' => 'El campo :attribute debe ser un array.',
    'before' => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha igual o anterior a :date.',
    'between' => [
        'numeric' => 'El campo :attribute debe ser entre :min y :max.',
        'file' => 'El campo :attribute debe ser entre :min y :max kilobytes.',
        'string' => 'El campo :attribute debe ser entre :min y :max caracteres.',
        'array' => 'El campo :attribute debe ser entre :min y :max artículos.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero of falso.',
    'confirmed' => 'El campo :attribute de confirmación no concuerda.',
    'date' => 'El campo :attribute no es una fecha valida.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El campo :attribute no concuerda al formato :format.',
    'different' => 'El campo :attribute y :other deben ser diferentes.',
    'digits' => 'El campo :attribute debe ser :digits dígitos.',
    'digits_between' => 'El campo :attribute debe ser entre :min y :max dígitos.',
    'dimensions' => 'El campo :attribute tiene dimensiones invalidas para una imagen.',
    'distinct' => 'El campo :attribute tiene valores duplicados.',
    'email' => 'El campo :attribute debe ser un correo electrónico valido.',
    'ends_with' => 'El campo :attribute debe terminar con alguno de los siguientes: :values.',
    'exists' => 'El campo seleccionado :attribute es invalido.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe contener un valor.',
    'gt' => [
        'numeric' => 'El campo :attribute debe ser mayor que :value.',
        'file' => 'El campo :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El campo :attribute debe ser mayor que :value caracteres.',
        'array' => 'El campo :attribute debe conter mas de :value artículos.',
    ],
    'gte' => [
        'numeric' => 'El campo :attribute debe ser igual o mayor que :value.',
        'file' => 'El campo :attribute debe ser igual o mayor que :value kilobytes.',
        'string' => 'El campo :attribute debe ser igual o mayor que :value caracteres.',
        'array' => 'El campo :attribute debe contener :value artículos o más.',
    ],
    'image' => 'El campo :attribute debe ser una imagen.',
    'in' => 'El campo seleccionado :attribute es invalido.',
    'in_array' => 'El campo :attribute no existen en :other.',
    'integer' => 'El campo :attribute debe ser un entero.',
    'ip' => 'El campo :attribute debe ser una dirección de IP valida.',
    'ipv4' => 'El campo :attribute debe ser una dirección IPv4 valida.',
    'ipv6' => 'El campo :attribute debe ser una dirección IPv6 valida.',
    'json' => 'El campo :attribute debe ser una cadena JSON valida.',
    'lt' => [
        'numeric' => 'El campo :attribute debe ser menor que :value.',
        'file' => 'El campo :attribute debe ser menor que :value kilobytes.',
        'string' => 'El campo :attribute debe ser menor que :value caracteres.',
        'array' => 'El campo :attribute debe ser menor que :value artículos.',
    ],
    'lte' => [
        'numeric' => 'El campo :attribute debe ser igual o menor a :value.',
        'file' => 'El campo :attribute debe ser igual o menor a :value kilobytes.',
        'string' => 'El campo :attribute debe ser igual o menor a :value caracteres.',
        'array' => 'El campo :attribute debe ser igual o menor a :value artículos.',
    ],
    'max' => [
        'numeric' => 'El campo :attribute no debe ser mayor a :max.',
        'file' => 'El campo :attribute no debe ser mayor a :max kilobytes.',
        'string' => 'El campo :attribute no debe ser mayor a :max caracteres.',
        'array' => 'El campo :attribute no debe ser mayor a :max artículos.',
    ],
    'mimes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El campo :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El campo :attribute debe ser de al menos :min.',
        'file' => 'El campo :attribute debe ser de al menos :min kilobytes.',
        'string' => 'El campo :attribute debe ser de al menos :min caracteres.',
        'array' => 'El  campo :attribute debe ser de al menos :min artículos.',
    ],
    'not_in' => 'El campo seleccionado :attribute es invalido.',
    'not_regex' => 'El campo :attribute tiene un formato invalido.',
    'numeric' => 'El campo :attribute debe ser un número.',
    'password' => 'La contraseña es incorrecta.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El campo :attribute tiene un formato invalido.',
    'required' => 'El campo :attribute es requerido.',
    'required_if' => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless' => 'El campo :attribute es requerido a menos que :other este en :values.',
    'required_with' => 'El campo :attribute es requerido cuando :values este presente.',
    'required_with_all' => 'El campo :attribute es requerido cuando :values esten presentes.',
    'required_without' => 'El campo :attribute es requerido cuando :values no este presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ninguno de :values esten presentes.',
    'same' => 'El campo :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El campo :attribute debe ser de :size.',
        'file' => 'El campo :attribute debe ser de :size kilobytes.',
        'string' => 'El campo :attribute debe ser de :size caracteres.',
        'array' => 'El campo :attribute debe contener :size artículos.',
    ],
    'starts_with' => 'El campo :attribute debe comenzar con alguno de los siguientes: :values.',
    'string' => 'El campo :attribute debe ser una cadena de texto.',
    'timezone' => 'El campo :attribute debe ser una zona horaria valida.',
    'unique' => 'El campo :attribute ya ha sido tomado.',
    'uploaded' => 'El campo :attribute fallo a cargarse.',
    'url' => 'El campo :attribute tiene un formato invalido.',
    'uuid' => 'El campo :attribute debe ser un UUID valido.',

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
