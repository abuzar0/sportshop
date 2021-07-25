<?php
session_start();
if (isset($_SESSION['email']))
{
    // echo  $_SESSION['Total'];
    // echo $_SESSION['email'];
    require('config.php');

}else{
    // session_destroy();
    echo $_SESSION['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
    .container{
        display:flex;
        justify-content:center;
        margin-top:59px;
    }
    </style>
</head>
<body>
<div class="container">
<form action="submit.php" method="post">
<script
 src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
 data-key="<?php echo $Publishablekey?>"
 data-name="<?php echo $_SESSION['email'];?>"
 data-amount="<?php echo $_SESSION['Total'];?>"
 data-description="testing for payment"
 data-image="https://www.designhill.com/resize_img.php?atyp=page_file&pth=ft_ca_ct||131||contestfile_1&flp=1586591339-8048208035e91766bcb2704-12835355.jpg"
 data-currency="usd"
 data-email="<?php echo $_SESSION['email'];?>"
>
</script>

</form>
</div>
</body>
</html>