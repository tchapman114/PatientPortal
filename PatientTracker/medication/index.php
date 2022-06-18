<?php include '../view/header.php'; ?>
<!DOCTYPE html>
 
    <html lang="en">
 
    <head>
 
    <meta charset="UTF-8">
 
    <title>Add Address Record Form</title>
 
    </head>
 
    <body>
 
    <form action="add_medication.php" method="post">
        <p>
            <label for="medication">Medication Name:</label>
            <input type="text" name="medication" id="medication">
        </p> 
        <p>
            <label for="Start Date">Start Date:</label>
            <input type="date" name="startdate" id="startdate">
        </p> 
        <input type="submit" name="submit" value="Submit">
 
    </form>
 
    </body>
 
    </html>