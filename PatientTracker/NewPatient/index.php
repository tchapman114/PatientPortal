<?php include '../view/header.php'; ?>
<!DOCTYPE html>
 
    <html lang="en">
 
    <head>
 
    <meta charset="UTF-8">
 
    <title>Add User Record Form</title>
 
    </head>
 
    <body>
 
    <form action="add_patient.php" method="post">
 
        <p>
            <label for="firstName">First Name:</label>
 
            <input type="text" name="firstname" id="firstname">
        </p>
 
        <p>
            <label for="lastName">Last Name:</label>
 
            <input type="text" name="lastname" id="lastname">
        </p>
 
        <p>
            <label for="dob">DOB:</label>
 
            <input type="date" name="dob" id="dob"> 
        </p>
 
        <p>
            <label for="phone">Phone Number:</label>
 
            <input type="text" name="phone" id="phone">
        </p>
        <p>
            <label for="email">E-mail:</label>
 
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label for="gender">Gender:</label>
 
            <input type="text" name="gender" id="gender">
        </p>
        <p>
            <label for="weight">Weight:</label>
 
            <input type="text" name="weight" id="weight">
        </p>
        <p>
            <label for="height">Height:</label>
 
            <input type="text" name="height" id="height">
        </p>
        <p>
            <label for="bloodpressure">Blood Pressure:</label>
 
            <input type="text" name="bloodpressure" id="bloodpressure">
        </p>
 
        <input type="submit" name="submit" value="Submit">
 
    </form>
 
    </body>
 
    </html>