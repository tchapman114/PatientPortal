<?php require('../model/database.php');

if($_REQUEST['submit']){
 
    $insurance=$_POST['insurance'];
    
    $sql="INSERT INTO insurance(insurance) VALUES ('$insurance')";
    
    $result = $conn->query($sql);
     
    if($result){
    echo "New Record Inserted Successfully!";
    include '../view/next_medication.php';
    }else{
    echo "Error, Record not inserted.";
    }
    }

    ?>