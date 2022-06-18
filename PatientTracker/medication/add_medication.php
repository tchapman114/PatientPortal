<?php require('../model/database.php');

if($_REQUEST['submit']){
 
    $medication=$_POST['medication'];
    $startdate=$_POST['startdate'];
  
    $sql="INSERT INTO medication (medication,startdate) VALUES ('$medication','$startdate')";
    
    $result = $conn->query($sql);
     
    if($result){
        echo "New Record Inserted Successfully!";
        include '../view/next_allergy.php';
        }else{
        echo "Error, Record not inserted.";
        }
        }
    

    ?>