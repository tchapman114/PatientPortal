<?php
//Get the Band's data
$patientId=filter_input(INPUT_POST,'PateintId');
$name=filter_input(INPUT_POST,'Name');
$nickname=filter_input(INPUT_POST,'Nickname');
$DOB=filter_input(INPUT_POST,'DOB');
$contact=filter_input(INPUT_POST,'Email');


//Validate inputs
if($name==null || $DOB==null||$contact==null){
    $error="Invalid data. Check all fields and try again.";
}else{
    require_once('../model/database.php');
}
//Add the new band data to the database
$query="UPDATE PATIENT SET Name='".$name."', Nickname='".$nickname."', DOB='".$DOB."', Email='".$contact."' WHERE Id='".$patientId."'";
$statement = $db->prepare($query);
$statement->execute();
$statement->closeCursor();

//Display the Bands Page
include('index.php');

?>