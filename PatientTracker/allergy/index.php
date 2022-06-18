<?php include '../view/header.php'; ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Add Aleergy Record Form</title>
    </head>
    <body>
    <form action="add_allergy.php" method="post">
        <p>
            <label for="allergy">Allergy names:</label>
            <input type="text" name="allergy" id="allergy">
        </p> 
        <input type="submit" name="submit" value="Submit">
    </form>
 
    </body>
 
    </html>