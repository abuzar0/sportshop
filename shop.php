<?php

session_start();
   if (isset($_SESSION['email'])){echo("");}else{session_destroy();header("location:login.php");}
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
</head>
<body>
    
</body>
</html>