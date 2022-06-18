<?php require('../model/database.php');

if($_REQUEST['submit']){
 
    $allergy=$_POST['allergy'];
    
     
    $sql="INSERT INTO allergy(allergy) VALUES ('$allergy')";
    
    $result = $conn->query($sql);
     
    if($result){
    include '../view/header.php';
    echo "New Record Inserted Successfully!";

    }else{
    echo "Error, Record not inserted.";
    }
    }

    ?>