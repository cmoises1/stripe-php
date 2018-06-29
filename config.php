<?php 
require_once "stripe-php-master/init.php";
require_once 'products.php';

$stripeDetails = array(
	"secretKey" => "sk_test_tCrjoRMiI2Pz2XXrz5Um4Fu7",
	"publishableKey" => "pk_test_ZwDIX4bIYBBwsILDLWZG7zrM"
);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

?>