<?php
 include '../view/header.php'; 
require('../model/database.php');

$patientId=$_REQUEST['patientId'];
$query = "DELETE FROM patients WHERE patientId=$patientId"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: index.php"); 
?>