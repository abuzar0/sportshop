<?php
 include('stripe-php-master/init.php');
 $Publishablekey="pk_test_51J6aJwGGELb4MmKqFcONvknGQqXQKTKUQyrOqWHzrqdy55JPODMxmDDIFGd4VWO52Ti0VEt5IvYTNLqoWLsbOeDT007gEVcw6K";
 $Secretkey="sk_test_51J6aJwGGELb4MmKqU0Hchg3XaUTA158Wl10UaxCRzNeQfttjtGqYX1BYJC1bKtMHLh56ztnVFibkP6zWxTC95ZIQ00t3vayPT8";
 \Stripe\Stripe::setApiKey($Secretkey);
?>