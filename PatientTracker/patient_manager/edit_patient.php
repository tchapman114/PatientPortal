<?php require('../model/database.php');

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
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1>Update Record:</h1>
<?php
$status = "";
$_SESSION="";
if(isset($_POST['new']) && $_POST['new']==1){
  //$trn_date = date("Y-m-d H:i:s");
  $firstname =$_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
 // $submittedby = $_SESSION["username"];
  // $ins_query= "update patients
  // (`firstname`,`lastname`)values
  // ('$firstname','$lastname')";2
  $ins_query = "UPDATE patients SET firstname='$firstname', lastname='$lastname' WHERE id='$patientId";

  if (mysqli_query($conn, $ins_query)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }}
  else{
  ?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="patientId" type="hidden" value="<?php echo $row['patientId'];?>" />
<p><input type="text" name="firstname" placeholder="Enter First Name" 
required value="<?php echo $row['firstname'];?>" /></p>
<p><input type="text" name="lastname" placeholder="Enter Last Name: " 
required value="<?php echo $row['lastname'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>


</div>
</div>
</body>
</html>