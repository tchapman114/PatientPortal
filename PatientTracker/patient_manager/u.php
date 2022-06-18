<?php require('../model/database.php');

$firstname =$_REQUEST['firstname'];
$sql = "UPDATE patients SET firsntame='Doe' WHERE id=2";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}