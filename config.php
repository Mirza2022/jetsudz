<?php

require_once('vendor/autoload.php');
$stripe = array(
    "secret_key" => 'sk_test_51MFroPLk0H4R8Ms64f6irJxtfKzZoy1GjYcYcEbK0IRYqsEwt2BDKOINIx4yZuWh1wrqJCrbFvcDuKmM8XxeNCJL00vAgWowyo',
    "publishable_key" => 'pk_test_51MFroPLk0H4R8Ms6h6QAP0hx7LKfS2y8E8FiQD3v9ibACXXz3OqlsP1kHO6KATu6fzlSDxlk5Hz4iSBdBdm1h6jo0011ORda4Q'
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
