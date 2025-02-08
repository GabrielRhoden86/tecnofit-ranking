<?php
return [

'defaults' => [
    'guard' => 'web',
    'passwords' => 'users',
],

'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'userlogins', // Referência ao provedor 'userlogins'
    ],

    'api' => [
        'driver' => 'sanctum',
        'provider' => 'userlogins', // Referência ao provedor 'userlogins'
    ],
],

'providers' => [
    'userlogins' => [ // Nome do provedor é 'userlogins'
        'driver' => 'eloquent',
        'model' => App\Models\UserLogin::class, // Aqui está o caminho correto do modelo UserLogin
    ],
],

'passwords' => [
    'users' => [
        'provider' => 'users',
        'table' => 'password_reset_tokens',
        'expire' => 60,
        'throttle' => 60,
    ],
],

'password_timeout' => 10800,

];
