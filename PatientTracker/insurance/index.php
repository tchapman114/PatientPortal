<?php include '../view/header.php'; ?>
<!DOCTYPE html>
 
    <html lang="en">
 
    <head>
 
    <meta charset="UTF-8">
 
    <title>Add Insurance Record Form</title>
 
    </head>
 
    <body>
 
    <form action="add_insurance.php" method="post">
        <p>
            <br>
            <label for="insurance">Insurance Provider:</label>
            <input type="text" name="insurance" id="insurance">
        </p>
        <br> 
        <input type="submit" name="submit" value="Submit">
 
    </form>
 
    </body>
 
    </html>