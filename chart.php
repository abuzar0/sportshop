<?php
    session_start();
    if(isset($_POST['data'])){
        $data=$_POST['data'];
        $jsonData=json_decode($data);
        // $Chart=array();
        $_SESSION['Cart'][]=array(
        'UniqueID'=>rand(100,200),
        'Name'=> $jsonData->name,
        'Quantity'=>$jsonData->Quantity,
        'Price'=>$jsonData->price,
        'Total'=>$jsonData->total,

        );
        // $_SESSION['Cart']['No']=$No;
        // array_push($Chart,$No,$Name,$Quantity,$Price,$Total);
        // $_SESSION['Cart']=($Chart,$id);
        // array_push($_SESSION['Cart'],$id);
        // echo var_dump($_SESSION['Cart']);
    }
    else{
        echo 'no';
    }
//$data=$_POST['data'];
// $jsonData=json_decode($data);
// $Chart=array();
// $No=$jsonData->No;
// $Name=$jsonData->name;
// $Quantity=$jsonData->Quantity;
// $Price=$jsonData->price;
// $Total=$jsonData->total;
// array_push($Chart,$No,$Name,$Quantity,$Price,$Total);
// array_push($_SESSION['Cart'],$Chart);
//  $x=array_filter($_SESSION['Cart']);    
// print_r($x);}
?>