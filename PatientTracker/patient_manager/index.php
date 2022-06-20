<?php include '../view/header.php'; ?>
<?php require('../model/database.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="Style/patient.css" />
</head>
<body>
<div class="form">
<h2>View Active Patients:</h2>
<table width="85%" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Last Name</strong></th>
<th><strong>First Name</strong></th>
<th><strong>DOB</strong></th>
<th><strong>Phone Number</strong></th>
<th><strong>Email</strong></th>
<th><strong>Gender</strong></th>
<th><strong>Weight</strong></th>
<th><strong>Height</strong></th>
<th><strong>Blood Pressure</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from patients ORDER BY lastname asc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<td align="center"><?php echo $row["lastname"]; ?></td>
<td align="center"><?php echo $row["firstname"]; ?></td>
<td align="center"><?php echo $row["dob"]; ?></td>
<td align="center"><?php echo $row["phone"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["gender"]; ?></td>
<td align="center"><?php echo $row["weight"]; ?></td>
<td align="center"><?php echo $row["height"]; ?></td>
<td align="center"><?php echo $row["bloodpressure"]; ?></td>
<td align="center">
<a href="edit_patient.php?patientId=<?php echo $row["patientId"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?patientId=<?php echo $row["patientId"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>

