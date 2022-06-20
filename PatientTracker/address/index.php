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
            <br>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address">
        </p> 
        <br>
        <p>
            <label for="city">City:</label> 
            <input type="text" name="city" id="city">
        </p>
        <br>
        <p>
            <label for="zip">Zip Code:</label> 
            <input type="text" name="zip" id="zip"> 
        </p>
        <br>
        <p>
            <label for="state">State:</label>
            <input type="text" name="state" id="state">
        </p>
        <br>
        <input type="submit" name="submit" value="Submit">
 
    </form>
 
    </body>
 
    </html>