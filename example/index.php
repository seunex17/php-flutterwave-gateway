<?php

use Zubdev\Transaction;

require_once './zubdev/Transaction.php';

$secretKey = "FLWSECK_TEST-eee25be1b44ef9a132a872075b3a0910-X";
$publicKey = "";

$txn = new Transaction($secretKey, $publicKey);

$request = [
    'tx_ref' => time(), //* A unique transaction references
    'amount' => 500, //* Amount to be charged
    'currency' => 'NGN', //* Payment currency
    'payment_options' => 'card', //* Payment options
    'redirect_url' => 'http://localhost/demo/raves/verify.php', //* Redirect url to check payment status
    'customer' => [
        'email' => 'user@mail.com', //* Customer email
        'name' => 'Zubdev', //* Customer name,
        'phone' => '' //* Customer phone number
    ],
    'meta' => [
        //* An array of an additional information
    ],
    'customizations' => [
        'title' => 'Paying for a sample product', //* Payment title
        'description' => 'sample', //* Payment description
        'logo' => '' //* Your website logo url
    ]
];

$txn->checkout($request);