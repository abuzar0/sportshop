<?php 
    include('connection.php');  
    if(isset($_POST['submitFlag'])){
        $email=$_POST['e_mail'];
        $pass=$_POST['Password'];
        $sql="INSERT INTO `register`( `Name`, `Password`) VALUES ('$email','$pass')";
           if ($conn->query($sql) === TRUE) {
            echo "OK";
          } else {
            echo "NO";
          }
    }
    ///

    if(isset($_POST['loginFlag'])){
      session_start();
      $email=$_POST['e_mail'];
      $pass=$_POST['Password'];
      $sql="SELECT * from register where Name ='$email' and Password='$pass'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
         if ($row>0) {
          $_SESSION['email']=$row['Name'];
          echo "Success";
        } else {
          echo "NO-Success";
        }
  }


?>