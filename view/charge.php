<?php
session_start();
require_once('../config.php');

$token = $_POST['stripeToken'];

//INCLUDE ALL POST INFORMATION HERE

$customer = \Stripe\Customer::create(array(

    'name' => 'Mirza Shah',
    'description' => 'Guest Payment',
    'source'  => $token,
    'email' => 'mirzashah2014@gmail.com',
    'address' => ['city' => 'Brooklyn', 'country' => 'USA', 'line1' => 'Address line 1', 'line2' => 'Address Line 2', 'postal_code' => '00592', 'state' => 'New York']
));

$charge = \Stripe\Charge::create(array(

    'customer' => $customer->id,
    'amount' => 500,
    'currency' => 'usd',
    'description' => 'Emergency Booking for Boat Cleaning'

));

if ($charge) {

    echo '<h1>Success!</h1>';
    echo $_SESSION['userRole'];
}
