<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '267601787296848', //your facebook app id
        'client_secret' => '3f69ca1c08143e1140ff489cec1f2caf', //your facebook secret code
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '645649082521-et3s9mn2thi5v4bcfavvs7thpi3ujkhq.apps.googleusercontent.com', //your google app id
        'client_secret' => 'Z5BcPWm_CXbDzmSU6bnT9L52', //your google secret code
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
        'response'=>'code',
        'prompt'=>'select_account',
    ],

    'instagram' => [
         'client_id' => '229933abc62742ed80670ab71988d4da', //your instagram app id
        'client_secret' => 'a7dab93241ca49fe90f0bb486ac5d4c0', //your google secret code
        'redirect' => 'http://127.0.0.1:8000/auth/instagram/callback',
    ],
];
