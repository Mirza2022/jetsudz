<?php

require_once('vendor/autoload.php');
$stripe = array(
    "secret_key" => 'sk_test_51MFroPLk0H4R8Ms64f6irJxtfKzZoy1GjYcYcEbK0IRYqsEwt2BDKOINIx4yZuWh1wrqJCrbFvcDuKmM8XxeNCJL00vAgWowyo',
    "publishable_key" => 'pk_test_51MFroPLk0H4R8Ms6PoA9ECN4TjiLPexGTJZNfcxEfJu4IERFqp6gpznQWSarMbfCd3quaO6t0oNy34zvgd8ee3K200zYXoElW2'
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
