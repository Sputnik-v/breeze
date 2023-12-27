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

    'accepted' => 'Поле :attribute должно быть принято..',
    'accepted_if' => 'Поле :attribute должно быть принято, если :other равно :value..',
    'active_url' => 'Поле :attribute должно быть действительным URL-адресом..',
    'after' => 'Поле :attribute должно содержать дату после :date..',
    'after_or_equal' => 'Поле :attribute должно содержать дату, следующую за :date или равную ей..',
    'alpha' => 'Поле :attribute должно содержать только буквы..',
    'alpha_dash' => 'Поле :attribute должно содержать только буквы, цифры, тире и подчеркивания..',
    'alpha_num' => 'Поле :attribute должно содержать только буквы и цифры..',
    'array' => 'Поле :attribute должно быть массивом..',
    'ascii' => 'Поле :attribute должно содержать только однобайтовые буквенно-цифровые символы и символы..',
    'before' => 'Поле :attribute должно содержать дату перед :date..',
    'before_or_equal' => 'Поле :attribute должно быть датой, предшествующей :date или равной ей..',
    'between' => [
        'array' => 'Поле :attribute должно содержать элемент от :min до :max.s.',
        'file' => 'Поле :attribute должно быть между :min и :max килобайтами..',
        'numeric' => 'Поле :attribute должно быть между :min и :max..',
        'string' => 'Поле :attribute должно содержать символы :min и :max..',
    ],
    'boolean' => 'Поле :attribute должно быть истинным или ложным..',
    'can' => 'Поле :attribute содержит несанкционированное значение..',
    'confirmed' => 'Подтверждение поля :attribute не соответствует.',
    'current_password' => 'Неправильный пароль.',
    'date' => 'Поле :attribute должно содержать действительную дату..',
    'date_equals' => 'Поле :attribute должно содержать дату, равную :date..',
    'date_format' => 'Поле :attribute должно соответствовать формату :format..',
    'decimal' => 'Поле :attribute должно содержать :decimal десятичные знаки..',
    'declined' => 'Поле :attribute должно быть отклонено.',
    'declined_if' => 'Поле :attribute должно быть отклонено, если :other равно :value.',
    'different' => 'Поле :attribute и :other должны быть разными..',
    'digits' => 'Поле :attribute должно содержать :digits цифры..',
    'digits_between' => 'Поле :attribute должно содержать цифры от :min до :max..',
    'dimensions' => 'The :attribute field has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => 'The :attribute field must be a valid email address.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute field must have more than :value items.',
        'file' => 'The :attribute field must be greater than :value kilobytes.',
        'numeric' => 'The :attribute field must be greater than :value.',
        'string' => 'The :attribute field must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute field must have :value items or more.',
        'file' => 'The :attribute field must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute field must be greater than or equal to :value.',
        'string' => 'The :attribute field must be greater than or equal to :value characters.',
    ],
    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
    'image' => 'The :attribute field must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field must exist in :other.',
    'integer' => 'The :attribute field must be an integer.',
    'ip' => 'The :attribute field must be a valid IP address.',
    'ipv4' => 'The :attribute field must be a valid IPv4 address.',
    'ipv6' => 'The :attribute field must be a valid IPv6 address.',
    'json' => 'The :attribute field must be a valid JSON string.',
    'lowercase' => 'The :attribute field must be lowercase.',
    'lt' => [
        'array' => 'The :attribute field must have less than :value items.',
        'file' => 'The :attribute field must be less than :value kilobytes.',
        'numeric' => 'The :attribute field must be less than :value.',
        'string' => 'The :attribute field must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute field must not have more than :value items.',
        'file' => 'The :attribute field must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute field must be less than or equal to :value.',
        'string' => 'The :attribute field must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute field must be a valid MAC address.',
    'max' => [
        'array' => 'Поле :attribute не должно содержать более :max элементов..',
        'file' => 'Поле :attribute не должно превышать :max килобайт..',
        'numeric' => 'Поле :attribute не должно быть больше :max..',
        'string' => 'Поле :attribute не должно содержать более :max символов..',
    ],
    'max_digits' => 'The :attribute field must not have more than :max digits.',
    'mimes' => 'The :attribute field must be a file of type: :values.',
    'mimetypes' => 'The :attribute field must be a file of type: :values.',
    'min' => [
        'array' => 'Поле :attribute должно содержать не менее :min элементов..',
        'file' => 'Поле :attribute должно быть не менее :min килобайт..',
        'numeric' => 'Поле :attribute должно быть не менее :min..',
        'string' => 'Поле :attribute должно содержать не менее :min символов..',
    ],
    'min_digits' => 'The :attribute field must have at least :min digits.',
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute field must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute field format is invalid.',
    'numeric' => 'The :attribute field must be a number.',
    'password' => [
        'letters' => 'Поле :attribute должно содержать хотя бы одну букву..',
        'mixed' => 'Поле :attribute должно содержать хотя бы одну заглавную и одну строчную букву..',
        'numbers' => 'Поле :attribute должно содержать хотя бы одно число..',
        'symbols' => 'Поле :attribute должно содержать хотя бы один символ..',
        'uncompromised' => 'Данный :attribute появился в результате утечки данных. Пожалуйста, выберите другой :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'Поле :attribute должно соответствовать :other.',
    'size' => [
        'array' => 'Поле :attribute должно содержать элементы :size..',
        'file' => 'Поле :attribute должно быть :size в килобайтах..',
        'numeric' => 'Поле :attribute должно быть :size.',
        'string' => 'Поле :attribute должно содержать символ :size.s.',
    ],
    'starts_with' => 'Поле :attribute должно начинаться с одного из следующих значений: :values..',
    'string' => 'Поле :attribute должно быть строкой..',
    'timezone' => 'Поле :attribute должно указывать действительный часовой пояс..',
    'unique' => ':attribute уже занят.',
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url' => 'The :attribute field must be a valid URL.',
    'ulid' => 'The :attribute field must be a valid ULID.',
    'uuid' => 'The :attribute field must be a valid UUID.',

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
