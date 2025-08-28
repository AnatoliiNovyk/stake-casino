<?php
/**
 *   1Stake iGaming Platform
 *   -----------------------
 *   services.php
 * 
 *   @copyright  Copyright (c) 1stake, All rights reserved
 *   @author     1stake <sales@1stake.app>
 *   @see        https://1stake.app
*/

return [

    

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    
    'gtm' => [
        'container_id' => env('GTM_CONTAINER_ID'),
    ],

    
    'recaptcha' => [
        'public_key' => env('RECAPTCHA_PUBLIC_KEY'),
        'secret_key' => env('RECAPTCHA_SECRET_KEY'),
        'version' => env('RECAPTCHA_VERSION', 2),
        'min_score' => env('RECAPTCHA_MIN_SCORE', 0.5),
    ],

    'sendgrid' => [
        'api_key' => env('SENDGRID_API_KEY', env('MAIL_PASSWORD')),
        'list_id' => env('SENDGRID_LIST_ID'),
    ],

    'blueassure' => [
        'user' => env('BLUEASSURE_USER'),
        'password' => env('BLUEASSURE_PASSWORD'),
    ],

    'postaffiliatepro' => [
        'script' => [
            'id' => env('POSTAFFILIATEPRO_SCRIPT_ID'),
            'url' => env('POSTAFFILIATEPRO_SCRIPT_URL'),
        ],
        'api' => [
            'url' => env('POSTAFFILIATEPRO_API_URL'),
        ],
        'signup_action_code' => env('POSTAFFILIATEPRO_SIGNUP_ACTION_CODE'),
        'cron' => [
            'time' => env('POSTAFFILIATEPRO_CRON_TIME', '02:00'),
        ]
    ],

    'amcharts' => [
        'license' => env('AMCHARTS_LICENSE', 'AM5C123456789'),
    ],

    'support_chat' => [
        'provider' => env('SUPPORT_CHAT_PROVIDER'),
        'is_hidden' => env('SUPPORT_CHAT_IS_HIDDEN', true),
        'providers' => [
            'crisp' => [
                'website_id' => env('SUPPORT_CHAT_CRISP_WEBSITE_ID'),
                'identifier' => env('SUPPORT_CHAT_CRISP_IDENTIFIER'),
                'key' => env('SUPPORT_CHAT_CRISP_KEY'),
            ],
            'tawk' => [
                'property_id' => env('SUPPORT_CHAT_TAWK_PROPERTY_ID'),
                'widget_id' => env('SUPPORT_CHAT_TAWK_WIDGET_ID'),
            ],
        ],
    ],

    'api' => [
        'crypto' => [
            'provider' => env('API_CRYPTO_PROVIDER', 'coincap'),
            'providers' => [
                'random' => [
                    'min_value' => (float) env('API_CRYPTO_PROVIDERS_RANDOM_MIN_VALUE', 100),
                    'max_value' => (float) env('API_CRYPTO_PROVIDERS_RANDOM_MAX_VALUE', 200),
                    'series_length' => (int) env('API_CRYPTO_PROVIDERS_RANDOM_SERIES_LENGTH', 300),
                    'decimals' => (int) env('API_CRYPTO_PROVIDERS_RANDOM_DECIMALS', 2),
                ],
                'coincap' => [
                    'endpoint' => env('API_CRYPTO_PROVIDERS_COINCAP_ENDPOINT', 'https://rest.coincap.io/v3/'),
                    'api_key' => env('API_CRYPTO_PROVIDERS_COINCAP_API_KEY'),
                ],
                'cryptocompare' => [
                    'endpoint' => env('API_CRYPTO_PROVIDERS_CRYPTOCOMPARE_ENDPOINT', 'https://min-api.cryptocompare.com/data/'),
                    'api_key' => env('API_CRYPTO_PROVIDERS_CRYPTOCOMPARE_API_KEY'),
                ]
            ]
        ]
    ],
];
