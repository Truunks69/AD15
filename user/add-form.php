<?php
session_start();
include('../config.php');
include('../verif-user.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">

        <title>Add</title>
    </head>

<div id="container">
            
            <form action="add.php" method="POST">
                <h1>Add product</h1>
                <p><a href="index.php">< retour</a></p>
                
                <label><b>Product name</b></label>
                <input type="text" placeholder="Enter the product name" name="nom" required>

                <label><b>Description</b></label>
                <input type="text" placeholder="Enter the product description" name="description" required>

                <label><b>Description</b></label>
                <input type="date" name="date" required>

                <input type="submit" id='submit' value='ADD' >
            </form>
        </div>
<?php
include('../footer.php');
?>
