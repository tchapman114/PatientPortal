<?php include '../view/header.php'; ?>
<!DOCTYPE html>
 
    <html lang="en">
 
    <head>
 
    <meta charset="UTF-8">
 
    <title>Add Address Record Form</title>
 
    </head>
 
    <body>
 
    <form action="add_address.php" method="post">
        <p>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address">
        </p> 
        <p>
            <label for="city">City:</label> 
            <input type="text" name="city" id="city">
        </p>
        <p>
            <label for="zip">Zip Code:</label> 
            <input type="text" name="zip" id="zip"> 
        </p>
        <p>
            <label for="state">State:</label>
            <input type="text" name="state" id="state">
        </p>
        <input type="submit" name="submit" value="Submit">
 
    </form>
 
    </body>
 
    </html>