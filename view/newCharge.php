<?php
session_start();

require_once('../config.php');

$email = $_SESSION['email'];
// This is your real test secret API key.
//\Stripe\Stripe::setApiKey('sk_test_51MFroPLk0H4R8Ms6mnWqNHdD6SaYNjn4kfdACseBW0BpJ1VGsstyppHGSq0yAV0MItCDXwLNVK8zmcRDwhHF8otq00CeSzVYsM');
// You probably have a database to keep track of preexisting customers.
// But to keep things simple, we'll use an Object to store Stripe object IDs in this example.
$CUSTOMERS = [
    [
        'stripeId' => 'cus_123456789',
        'email' => 'mirzashah2014@gmail.com'
    ],
];
// Prices on Stripe model the pricing scheme of your business.
// Create Prices in the Dashboard or with the API before accepting payments
// and store the IDs in your database.
$PRICES = [
    'basic' => 'price_123456789',
    'professional' => 'price_987654321',
];

function sendInvoice($email)
{
    // Look up a customer in your database
    global $CUSTOMERS;
    global $PRICES;

    $customerId = null;

    $customers = array_filter($CUSTOMERS, function ($user) use ($email) {
        return $user['email'] === $email;
    });

    if (!$customers) {
        // Create a new Customer
        $customer = \Stripe\Customer::create([
            'email' => $email,
            'description' => 'Customer to invoice',
        ]);
        // Store the Customer ID in your database to use for future purchases
        $CUSTOMERS[] = [
            'stripeId' => $customer->id,
            'email' => $email
        ];

        $customerId = $customer->id;
    } else {
        // Read the Customer ID from your database
        $customerId = $customers[0]['stripeId'];
    }

    // Create an Invoice
    $invoice = \Stripe\Invoice::create([
        'customer' => $customerId,
        'collection_method' => 'send_invoice',
        'days_until_due' => 30,
    ]);

    // Create an Invoice Item with the Price, and Customer you want to charge
    
    $invoiceItem = \Stripe\InvoiceItem::create([
        'customer' => $customerId,
        'price' => $PRICES['basic'],
        'invoice' => $invoice->id
    ]);


    // Send the Invoice
    $invoice->sendInvoice();
}
