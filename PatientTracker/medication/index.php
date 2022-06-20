<?php include '../view/header.php'; ?>
<!DOCTYPE html>
 
    <html lang="en">
 
    <head>
 
    <meta charset="UTF-8">
 
    <title>Add Medication Record Form</title>
 
    </head>
 
    <body>
 
    <form action="add_medication.php" method="post">
        <br>
        <p>
            <label for="medication">Medication Name:</label>
            <input type="text" name="medication" id="medication">
        </p> 
        <br>
        <p>
            <label for="Start Date">Start Date:</label>
            <input type="date" name="startdate" id="startdate">
        </p> 
        <br>
        <input type="submit" name="submit" value="Submit">
 
    </form>
 
    </body>
 
    </html>