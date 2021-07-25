<?php
session_start();
if (isset($_SESSION['Total']))
{
  $total=$_SESSION['Total'];
  echo $total;
  require('config.php');
  \Stripe\Stripe::setVerifySslCerts(false);
  $token=$_POST['stripeToken'];
 $data=\Stripe\Charge::create(array(
      "amount"=>$total,
      "currency"=>"usd",
      "description"=>"testing for payment",
      "source"=>$token,
  ));
  // echo "<pre>";
  // print_r($data);
  header("Location:index.php");
}
else{
  echo 'Error !!!!!';
}
?>