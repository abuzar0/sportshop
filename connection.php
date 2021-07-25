<?php
    $severname="localhost";
    $dbuser="abcd";
    $dbpassword="1234";
    $dbname="shop";
    $conn=mysqli_connect($severname,$dbuser,$dbpassword,$dbname);
      if(!$conn ){
          die('Could not connect: ' . mysqli_error());
       }
?>