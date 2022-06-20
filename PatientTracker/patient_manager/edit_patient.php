<?php
include '../view/header.php'; 
require('../model/database.php');

$patientId=$_REQUEST['patientId'];
$query = "SELECT * from patients where patientId='".$patientId."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="Style/patient.css" />
</head>
<body>
<div class="form">
<h1>Update Patient Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$patientId=$_REQUEST['patientId'];
$firstname =$_REQUEST['firstname'];
$lastname =$_REQUEST['lastname'];
$dob =$_REQUEST['dob'];
$phone =$_REQUEST['phone'];
$email =$_REQUEST['email'];
$gender =$_REQUEST['gender'];
$weight =$_REQUEST['weight'];
$height =$_REQUEST['height'];
$bloodpressure =$_REQUEST['bloodpressure'];

session_start();
$update="update patients set 
firstname='".$firstname."', lastname='".$lastname."', dob='".$dob."', phone='".$phone."', email='".$email."',
 gender='".$gender."', weight='".$weight."', height='".$height."', bloodpressure='".$bloodpressure."'
 where patientId='".$patientId."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='index.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="patientId" type="hidden" value="<?php echo $row['patientId'];?>" />
<!-- Actual edit form  -->
<p><input type="text" name="firstname" placeholder="Enter First Name" 
required value="<?php echo $row['firstname'];?>" /></p>
<br>
<p><input type="text" name="lastname" placeholder="Enter Last Name" 
required value="<?php echo $row['lastname'];?>" /></p>
<br>
<p><input type="text" name="dob" placeholder="Enter DOB" 
required value="<?php echo $row['dob'];?>" /></p>
<br>
<p><input type="text" name="phone" placeholder="Enter Phone Number" 
required value="<?php echo $row['phone'];?>" /></p>
<br>
<p><input type="text" name="email" placeholder="Enter Email" 
required value="<?php echo $row['email'];?>" /></p>
<br>
<p><input type="text" name="gender" placeholder="Enter Gender" 
required value="<?php echo $row['gender'];?>" /></p>
<br>
<p><input type="text" name="weight" placeholder="Enter weight" 
required value="<?php echo $row['weight'];?>" /></p>
<br>
<p><input type="text" name="height" placeholder="Enter Height" 
required value="<?php echo $row['height'];?>" /></p>
<br>
<p><input type="text" name="bloodpressure" placeholder="Enter Blood Pressure" 
required value="<?php echo $row['bloodpressure'];?>" /></p>
<br>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
