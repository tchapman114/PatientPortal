<?php include '../view/header.php'; ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Add Allergy Record Form</title>
    </head>
    <body>
    <form action="add_allergy.php" method="post">
        <br>
        <p>
            <label for="allergy">Allergies:</label>
            <input type="text" name="allergy" id="allergy">
        </p> 
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
 
    </body>
 
    </html>