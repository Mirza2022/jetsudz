<?php

require_once('vendor/autoload.php');
$stripe = array(
    "secret_key" => 'sk_test_51MFroPLk0H4R8Ms6mnWqNHdD6SaYNjn4kfdACseBW0BpJ1VGsstyppHGSq0yAV0MItCDXwLNVK8zmcRDwhHF8otq00CeSzVYsM',
    "publishable_key" => 'pk_test_51MFroPLk0H4R8Ms6n48TegNHvso3m4dKaO1n3SU8dYBfWqzWmFpo4ekOeR2HEeaK0Sv9tcUvUqxclwaMN0m9N7bq00cUFRXXlR'
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);