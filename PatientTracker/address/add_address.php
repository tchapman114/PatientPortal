<?php require('../model/database.php');

if($_REQUEST['submit']){
 
    $address=$_POST['address'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $state=$_POST['state'];
     
    $sql="INSERT INTO address(address,city,zip,state) VALUES ('$address','$city','$zip','$state')";
    
    $result = $conn->query($sql);
     
    if($result){
    echo "New Record Inserted Successfully!";
    include '../view/next_insurance.php';
    }else{
    echo "Error, Record not inserted.";
    }
    }

    ?>