<?php return [

    /*
    |--------------------------------------------------------------------------
    | Replace list
    |--------------------------------------------------------------------------
    | An associative array with a list of words that you want to replace.
    | keys of the array will be the words that you want to replace and the
    | values will be the words with which the key words will be replaced e.g.
    |
    |     'replace' => [
    |         '\bidiot\b'    => '(not a nice word)',
    |         '\bseventh\b'  => '7th',
    |         '\bmonthly\b'  => 'every month',
    |         '\byearly\b'   => 'every year',
    |         '\bweekly\b'   => 'every week',
    |         '傻瓜'         => '可爱',
    |     ],
    |
    | In this case "idiot" will be replaced with "(not a nice word)", "seventh"
    | will be replaced with "7th" and so on.
    |
    */
    'replace' => [
        // '\bto censor\b'    => 'censored word',
        // '\banother word\b' => 'another replacement',
    ],

    /*
    |--------------------------------------------------------------------------
    | Redact List
    |--------------------------------------------------------------------------
    | Specify the words that you want to completely redact. The words
    | specified in here will be replaced with asterisks (*) e.g.
    |
    |    'redact' => [
    |       '\bidiot\b',
    |       '\bpassword\b',
    |       '\bword-that-i-really-dislike\b',
    |    ],
    |
    |  In this case "idiot" will be replaced with *****
    |  password with ******** and so on
    |
    */
    'redact' => [
        // '\bidiot\b',
        // '\brubbish\b'
    ],

];