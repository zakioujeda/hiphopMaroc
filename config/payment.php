<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Currency which have decimals
    |--------------------------------------------------------------------------
    */

    'currency_decimals' => ['AUD', 'CAD', 'CZK', 'DKK', 'EUR', 'HKD', 'MXN', 'NZD', 'NOK', 'PHP', 'PLN', 'GBP', 'RUB', 'SGD', 'SEK', 'CHF', 'THB', 'USD'],

    /*
    |--------------------------------------------------------------------------
    | Currency which supported by paypal subscription'
    |--------------------------------------------------------------------------
    */

    'paypal_currency_subscription' => ['AUD', 'BRL', 'CAD', 'CZK', 'DKK', 'EUR', 'HKD', 'HUF', 'INR', 'ILS', 'JPY', 'MYR', 'MXN', 'TWD', 'NZD', 'NOK', 'PHP', 'PLN', 'GBP', 'RUB', 'SGD', 'SEK', 'CHF', 'THB', 'USD'],

    'gateway' => [
        'tipme' => [
            'name' => 'TipMe',
            'color' => '#f5a623',
            'merchant_id' => '2891618846845521',
            'api_key' => 'c5d2aa3d92f8f8fcbdb524beb5338898',
            'endpoint' => 'http://staging.tipmeglobalservices.com',
            'purchaseLink' => 'frontend.tipme.purchase.authorization',
            'subscriptionLink' => 'frontend.tipme.subscription.authorization',
            'buttonColor' => '#771d18',
            'buttonIcon' => '',
        ],
        'zengapay' => [
            'name' => 'Zengapay',
            'color' => '#ffffff',
            'public_key' => 'ZPYPUBK-6e42b9387507e6a9a52854bb3e4b63a3785220b4f72f8c7d8f31bcca27124e98',
            'endpoint' => 'api.sandbox.zengapay.com',
            'purchaseLink' => 'frontend.zengapay.purchase.authorization',
            'subscriptionLink' => 'frontend.zengapay.subscription.authorization',
            'buttonColor' => '#084066',
            'buttonIcon' => '',
        ],
        'mpesa' => [
            'name' => 'M-Pesa',
            'color' => '#ffffff',
            'public_key' => 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAmptSWqV7cGUUJJhUBxsMLonux24u+FoTlrb+4Kgc6092JIszmI1QUoMohaDDXSVueXx6IXwYGsjjWY32HGXj1iQhkALXfObJ4DqXn5h6E8y5/xQYNAyd5bpN5Z8r892B6toGzZQVB7qtebH4apDjmvTi5FGZVjVYxalyyQkj4uQbbRQjgCkubSi45Xl4CGtLqZztsKssWz3mcKncgTnq3DHGYYEYiKq0xIj100LGbnvNz20Sgqmw/cH+Bua4GJsWYLEqf/h/yiMgiBbxFxsnwZl0im5vXDlwKPw+QnO2fscDhxZFAwV06bgG0oEoWm9FnjMsfvwm0rUNYFlZ+TOtCEhmhtFp+Tsx9jPCuOd5h2emGdSKD8A6jtwhNa7oQ8RtLEEqwAn44orENa1ibOkxMiiiFpmmJkwgZPOG/zMCjXIrrhDWTDUOZaPx/lEQoInJoE2i43VN/HTGCCw8dKQAwg0jsEXau5ixD0GUothqvuX3B9taoeoFAIvUPEq35YulprMM7ThdKodSHvhnwKG82dCsodRwY428kg2xM/UjiTENog4B6zzZfPhMxFlOSFX4MnrqkAS+8Jamhy1GgoHkEMrsT5+/ofjCx0HjKbT5NuA2V/lmzgJLl3jIERadLzuTYnKGWxVJcGLkWXlEPYLbiaKzbJb2sYxt+Kt5OxQqC1MCAwEAAQ==',
            'api_key' => 'iiez0s7q7k51o1aukajrcnwr71h18zn2',
            'endpoint' => 'api.sandbox.vm.co.mz',
            'service_provider_code' => 171717, //Shortcode of the business where funds will be credited to.
            'initiator_identifier' => 'MusicEngine',
            'security_credential' => 'MusicEngine',
            'purchaseLink' => 'frontend.mpesa.purchase.authorization',
            'subscriptionLink' => 'frontend.mpesa.subscription.authorization',
            'buttonColor' => '#e60202',
            'buttonIcon' => '',
        ],
        'momo' => [
            'name' => 'MoMo',
            'color' => '#ffffff',
            'public_key' => 'ZPYPUBK-6e42b9387507e6a9a52854bb3e4b63a3785220b4f72f8c7d8f31bcca27124e98',
            'purchaseLink' => 'frontend.momo.purchase.authorization',
            'subscriptionLink' => 'frontend.momo.subscription.authorization',
            'buttonColor' => '#a8216d',
            'buttonIcon' => '<svg width="24" class="svg-icon fill-current momo__logo " height="24" viewBox="0 0 96 87" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path d="M75.5326 0C64.2284 0 55.0651 8.74843 55.0651 19.5409C55.0651 30.3333 64.2284 39.0818 75.5326 39.0818C86.8368 39.0818 96 30.3333 96 19.5409C96 8.74843 86.8368 0 75.5326 0ZM75.5326 27.8805C70.7368 27.8805 66.8403 24.1604 66.8403 19.5818C66.8403 15.0031 70.7368 11.283 75.5326 11.283C80.3283 11.283 84.2248 15.0031 84.2248 19.5818C84.2248 24.1604 80.3283 27.8805 75.5326 27.8805ZM49.1561 14.6761V39.1226H37.3809V14.5535C37.3809 12.7138 35.8394 11.2421 33.9126 11.2421C31.9857 11.2421 30.4442 12.7138 30.4442 14.5535V39.1226H18.669V14.5535C18.669 12.7138 17.1276 11.2421 15.2007 11.2421C13.2739 11.2421 11.7324 12.7138 11.7324 14.5535V39.1226H0V14.6761C0 6.58176 6.89385 0 15.372 0C18.8403 0 22.0089 1.10377 24.5781 2.9434C27.1472 1.10377 30.3586 0 33.7841 0C42.2623 0 49.1561 6.58176 49.1561 14.6761ZM75.5326 47.544C64.2284 47.544 55.0651 56.2925 55.0651 67.0849C55.0651 77.8774 64.2284 86.6258 75.5326 86.6258C86.8368 86.6258 96 77.8774 96 67.0849C96 56.2925 86.8368 47.544 75.5326 47.544ZM75.5326 75.4245C70.7368 75.4245 66.8403 71.7044 66.8403 67.1258C66.8403 62.5472 70.7368 58.827 75.5326 58.827C80.3283 58.827 84.2248 62.5472 84.2248 67.1258C84.2248 71.7044 80.3283 75.4245 75.5326 75.4245ZM49.1561 62.2201V86.6667H37.3809V62.0975C37.3809 60.2579 35.8394 58.7862 33.9126 58.7862C31.9857 58.7862 30.4442 60.2579 30.4442 62.0975V86.6667H18.669V62.0975C18.669 60.2579 17.1276 58.7862 15.2007 58.7862C13.2739 58.7862 11.7324 60.2579 11.7324 62.0975V86.6667H0V62.2201C0 54.1258 6.89385 47.544 15.372 47.544C18.8403 47.544 22.0089 48.6478 24.5781 50.4874C27.1472 48.6478 30.3158 47.544 33.7841 47.544C42.2623 47.544 49.1561 54.1258 49.1561 62.2201Z" fill=""></path></svg>',
        ],
    ]
];
