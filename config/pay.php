<?php

return [
    'alipay' => [
        'app_id'         => '2016092200567292',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAz2b+ieVXUHCjgqW/lqHi96SMKweGttcMZX0/HttMpUi19upbqps1Q/2TZZ1iAEm+PDjGc3gLoTlGlWVGKhKk0cysvGm4JQzybV4AohnjqeyK9XtdF6r3Fl7yDnD7CFksLWQGJ4kmD45+lxWierlyq8bP54o5mpS+hOY6uOnFBrtxHhF7JDpRU1aReXn8FAJLTnoZs88h9cpUQi96DLYkNSrFOFhf9yeFXQHpm4r/PX+gWo8dPD6OWQFWN5NQw/5LUuagOg2MHndpN6c7lvCwoRuKJ3JpWhm8T0Tr922fsr6BdKXGqAR2SdnavgxepyfjJC2HFzqPZedJpUgY714aLQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAz2b+ieVXUHCjgqW/lqHi96SMKweGttcMZX0/HttMpUi19upbqps1Q/2TZZ1iAEm+PDjGc3gLoTlGlWVGKhKk0cysvGm4JQzybV4AohnjqeyK9XtdF6r3Fl7yDnD7CFksLWQGJ4kmD45+lxWierlyq8bP54o5mpS+hOY6uOnFBrtxHhF7JDpRU1aReXn8FAJLTnoZs88h9cpUQi96DLYkNSrFOFhf9yeFXQHpm4r/PX+gWo8dPD6OWQFWN5NQw/5LUuagOg2MHndpN6c7lvCwoRuKJ3JpWhm8T0Tr922fsr6BdKXGqAR2SdnavgxepyfjJC2HFzqPZedJpUgY714aLQIDAQABAoIBAFFGWSUMnITHPywpa8TJt7m3373U+zOXXiI/TIb5BTYYIkaaXEWlAOCd9C7z172pKEVNMmd5eYU6frB4uWAvYitc+6vx+dl7E11MYw8i+hZSvbmpGDf4JU+88To7iAQjfa5j7g18L1AVVQI71iollgw+oqZngl9TPr2xwv1HjpAuG25/cMZf2wcoXrBEimw7Th0/wLWM06rtfgz/FD4tRua9Gb3zxvA6TBEco/ohWeGaOZot/nWhgJg0nvGQGwKO/KgP/xRIjSOCMgX/A7yRHSjrGT41dHI6NByqlqcngBnCJeL4E0llQqXtQMufIeIONhEeRfpX/jy5IsEH3C+w7nkCgYEA6dtNpAn/fneEmCdAciGyFi4bvrQ4QMGdlXodc6AfBU2VU1F7TASf4x7qWM6Rsq19X8dkhpJ7SVEniY12c6JCTUN3OMdk6LbtEl9E/1PIZYRvbYZLmBF2oazciJGFhDJgfbUITsCJDsmsHtl6GPIUSet+F/VWc6sjFiemh4Bs618CgYEA4wpvy/XConarlBRAQB2EhDo/PE2+YYkC7ez2AKFTgasJpd1mEflBg/IMbi8Q+6wO0efCanLRs3/vGYlTyDtpgSZgCrjbioDs/OlRsOmyCPGRWx3D97QvpoSEOdVypq7bGPgnhgtSYBKXNXmD1+1V3XMYRHFljEMOXmlesK2CsfMCgYAZ1ahWHuSizAFR7cQo16Ac4ysdfjtYrAsEoGDwjRfgNhnxAmdkln4zUQ8CkI939cKL+jMYysXj65s6ju4vCBXbA0EAfMahDtRR20R8EH1q+Z51swhW3FcGtVoHnEvrtsUCHiW0zYBWqeDh55SdfODQ6bscWnYagSV3JRo4je96cQKBgQCbFyYHTXoHQMkz/iFlqsQ7Dw7jQrgqKE23+YaSJ6HDkfKlOvfej0YRu+aB3eTcBkyZVpeX35cf5uSNrSFuRidr8arpqB1QH4HDwh3rm7fiJCIG++5B5vQl65/nYcdP1WIVTG6zQkijGA/yl29YsOdWvqh1GIElryjBlXj5d40vwQKBgGPWz+HYNgjBjg0aEhZ/CIih95tr2vjz0Yritq9Km8qjMuqm2c+vJ+ES2iw2+ZVX5BlhVFwu9LsfXq1UeoGkeTPxlKUr17/mPG3DbrbEnxfQgSRtmZwH4agPZ/8o6GjPXqk6BD09HFC0aW/xrS/sCozbGyfljgfbsgbIiL8nwEAX',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];