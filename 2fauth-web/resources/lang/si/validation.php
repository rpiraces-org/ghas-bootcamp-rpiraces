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

    'accepted' => 'මෙම :attribute පිළිගත යුතුය.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'මෙම :attribute වලංගු සබැඳි එකක් නොවේ.',
    'after' => 'මෙම :attribute පසු දිනය විය යුතුය :date.',
    'after_or_equal' => 'මෙම :attribute පසුව හෝ ඊට සමාන දිනයකි :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'මෙම :attribute අරාව විය යුතුය.',
    'before' => 'මෙම :attribute පෙර දින විය යුතුය :date.',
    'before_or_equal' => 'මෙම :attribute පෙර හෝ ඊට සමාන දිනයකි :date.',
    'between' => [
        'array' => 'මෙම :attribute අතර තිබිය යුතුය :min සහ :max අයිතම.',
        'file' => 'මෙම :attribute අතර විය යුතුය :min සහ :max කිලෝ බයිට ගණන.',
        'numeric' => 'මෙම :attribute අතර විය යුතුය :min සහ :max.',
        'string' => 'මෙම :attribute අතර විය යුතුය :min සහ :max ප්රමාණය.',
    ],
    'boolean' => 'මෙම :attribute ක්ෂේත්ර සත්ය හෝ අසත්ය විය යුතුය.',
    'confirmed' => 'මෙම :attribute තහවුරු කිරීම නොගැලපේ.',
    'current_password' => 'The password is incorrect.',
    'date' => 'මෙම :attribute වලංගු දිනය නොවේ.',
    'date_equals' => 'මෙම :attribute දිනකට සමාන විය යුතුය :date.',
    'date_format' => 'මෙම :attribute ආකෘතියට ගැළපෙන්නේ නැත :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'මෙම :attribute සහ :other වෙනස් විය යුතුය.',
    'digits' => 'මෙම :attribute විය යුතුය :digits ඉලක්කම්.',
    'digits_between' => 'මෙම :attribute විය යුතුය අතර :min සහ :max ඉලක්කම්.',
    'dimensions' => 'මෙම :attribute වලංගු නොවන පිළිබිඹුවක් ඇත.',
    'distinct' => 'මෙම :attribute ක්ෂේත්රයේ අනුපිටපත් වටිනාකමක් ඇත.',
    'doesnt_end_with' => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    'email' => 'මෙම :attribute වලංගු විද්යුත් තැපැල් ලිපිනයක් විය යුතුය.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'මෙම තෝරා ඇත :attribute අවලංගුයි.',
    'file' => 'මෙම :attribute ගොනුවක් විය යුතුය.',
    'filled' => 'මෙම :attribute ක්ෂේත්රයේ වටිනාකමක් තිබිය යුතුය.',
    'gt' => [
        'array' => 'මෙම :attribute වඩා වැඩි විය යුතුය :value අයිතම.',
        'file' => 'මෙම :attribute වඩා විශාල විය යුතුය :value කිලෝ බයිට ගණන.',
        'numeric' => 'මෙම :attribute වඩා විශාල විය යුතුය :value.',
        'string' => 'මෙම :attribute වඩා විශාල විය යුතුය :value ප්රමාණය.',
    ],
    'gte' => [
        'array' => 'මෙම :attribute තිබිය යුතු :value අයිතම හෝ ඊට වැඩි.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],
    'image' => 'මෙම :attribute රූපයක් විය යුතුය.',
    'in' => 'මෙම තෝරා ඇත :attribute අවලංගුයි.',
    'in_array' => 'මෙම :attribute ක්ෂේත්රයේ නොපවතින :other.',
    'integer' => 'මෙම :attribute පූර්ණ සංඛ්යාවක් විය යුතුය.',
    'ip' => 'මෙම :attribute වලංගු IP ලිපිනයක් තිබිය යුතුය.',
    'ipv4' => 'මෙම :attribute වලංගු IPv4 ලිපිනය විය යුතුය.',
    'ipv6' => 'මෙම :attribute වලංගු IPv6 ලිපිනය විය යුතුය.',
    'json' => 'මෙම :attribute වලංගු JSON පේළියකි විය යුතුය.',
    'lt' => [
        'array' => 'මෙම :attribute වඩා අඩු විය යුතුය :value අයිතම.',
        'file' => 'මෙම :attribute වඩා අඩු විය යුතුය :value කිලෝ බයිට ගණන.',
        'numeric' => 'මෙම :attribute වඩා අඩු විය යුතුය :value.',
        'string' => 'මෙම :attribute වඩා අඩු විය යුතුය :value ප්රමාණය..',
    ],
    'lte' => [
        'array' => 'මෙම :attribute වඩා වැඩි නොවිය යුතුය :value අයිතම.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute must not be greater than :max.',
        'string' => 'The :attribute must not be greater than :max characters.',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => 'මෙම :attribute වර්ගයේ ගොනුවක් විය යුතුය: :values.',
    'mimetypes' => 'මෙම :attribute වර්ගයේ ගොනුවක් විය යුතුය: :values.',
    'min' => [
        'array' => 'මෙම :attribute අවම වශයෙන් තිබිය යුතුය :min අයිතම.',
        'file' => 'මෙම :attribute අවම වශයෙන් විය යුතුය :min කිලෝ බයිට ගණන..',
        'numeric' => 'මෙම :attribute අවම වශයෙන් විය යුතුය :min.',
        'string' => 'මෙම :attribute අවම වශයෙන් විය යුතුය :min ප්රමාණය..',
    ],
    'min_digits' => 'The :attribute must have at least :min digits.',
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'මෙම තෝරා ඇත :attribute අවලංගුයි.',
    'not_regex' => 'මෙම :attribute ආකෘතිය අවලංගුයි.',
    'numeric' => 'මෙම :attribute අංකයක් විය යුතුය.',
    'password' => [
        'letters' => 'The :attribute must contain at least one letter.',
        'mixed' => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute must contain at least one number.',
        'symbols' => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'මෙම :attribute ක්ෂේත්රයයි තිබිය යුතුය.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'මෙම :attribute ආකෘතිය අවලංගුයි.',
    'required' => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය :other මෙය :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි මිස :other මෙය :values.',
    'required_with' => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය :values තිබිය යුතුය.',
    'required_with_all' => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය :values තිබිය යුතුය.',
    'required_without' => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය :values තිබිය යුතුය.',
    'required_without_all' => 'මෙම :attribute ක්ෂේත්රයයි අවශ්යයි එය කිසිවක් of :values තිබිය යුතුය.',
    'same' => 'මෙම :attribute සහ :other ගැලපිය යුතුයි.',
    'size' => [
        'array' => 'මෙම :attribute must contain :size අයිතම.',
        'file' => 'මෙම :attribute විය යුතුය :size කිලෝ බයිට ගණන..',
        'numeric' => 'මෙම :attribute විය යුතුය :size.',
        'string' => 'මෙම :attribute විය යුතුය :size ප්රමාණය..',
    ],
    'starts_with' => 'මෙම :attribute පහත සඳහන් එකක් සමඟ ආරම්භ කළ යුතුය: :values',
    'string' => 'මෙම :attribute පේළියකි විය යුතුය.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'මෙම :attribute දැනටමත් අරගෙන තියෙන්නේ.',
    'uploaded' => 'මෙම :attribute උඩුගත කිරීම අසාර්ථක විය.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'මෙම :attribute වලංගු UUID විය යුතුය.',

    'single' => 'When using :attribute it must be the only parameter in this request body',
    'onlyCustomOtpWithUri' => 'The uri parameter must be provided alone or only in combination with the \'custom_otp\' parameter',

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
        'icon' => [
            'image' => 'Supported format are jpeg, png, bmp, gif, svg, or webp.',
        ],
        'qrcode' => [
            'image' => 'Supported format are jpeg, png, bmp, gif, svg, or webp.',
        ],
        'uri' => [
            'regex' => 'The :attribute is not a valid otpauth uri.',
        ],
        'otp_type' => [
            'in' => 'The :attribute is not supported.',
        ],
        'email' => [
            'exists' => 'No account found using this email.',
        ],
        'secret' => [
            'isBase32Encoded' => 'The :attribute must be a base32 encoded string.',
        ],
        'account' => [
            'regex' => 'The :attribute must not contain colon.',
        ],
        'service' => [
            'regex' => 'The :attribute must not contain colon.',
        ],
        'label' => [
            'required' => 'The uri must have a label.',
        ],
        'ids' => [
            'regex' => 'IDs must be comma separated, without trailing comma.',
        ]
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
