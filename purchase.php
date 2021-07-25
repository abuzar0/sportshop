<?php 
    $Bool=FALSE;
     if(isset($_POST['loginFlag'])){
      $jsonobj =json_decode($_POST['data'],true); 
      $length=count($jsonobj);
      $email=$_POST['email'];
      $G_total=$_POST['Total'];
      function DataBase($Name,$Quantity,$Amount,$Total,$mail){include('connection.php'); 
      $sql="INSERT INTO salls_table VALUES ('$Name','$Quantity','$Amount','$Total','$mail')";
      if ($conn->query($sql) === TRUE){}
     }
      $x='0';
      for($x; $x<$length;$x=$x+1){
        $Name = $jsonobj[$x]['Name']; 
        $Quantity = $jsonobj[$x]['Quantity']; 
        $Amount= $jsonobj[$x]['Amount']; 
        $Total = $jsonobj[$x]['Total'];
       DataBase($Name,$Quantity,$Amount,$Total,$email);
       if($x==$length-1){
        include('connection.php'); 
        $sql='';
          $sql="INSERT INTO total_bill VALUES ('$email','$G_total')";
           if ($conn->query($sql) === TRUE) {
            session_start();
            $_SESSION['email']=$_POST['email'];
            $_SESSION['Total']=$G_total;
           echo "OK`S";
          } else {
            echo "NO";}
        }
       }
}
else{
  echo 'NO';
}
?>