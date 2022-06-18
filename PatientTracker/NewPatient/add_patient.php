
<?php require('../model/database.php');


if($_REQUEST['submit']){
 
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $bloodpressure=$_POST['bloodpressure'];
     
    $sql="INSERT INTO patients (firstname,lastname,dob,phone,email,gender,weight,height,bloodpressure) VALUES ('$firstname','$lastname','$dob','$phone','$email','$gender','$weight','$height','$bloodpressure')";
    
    $result = $conn->query($sql);
     
    if($result){
    echo "New Record Inserted Successfully!";
    include '../view/next_address.php';
    }else{
    echo "Error, Record not inserted.";
    }
    }


    ?>