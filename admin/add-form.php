<?php
session_start();
include('../config.php');
include('../verif-admin.php');
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
<div class="row mx-auto">
    <p><a href="index.php"><img src="../img/back.svg" alt="back" style="width: 70px; height: 70px;"></a></p>

    <div id="container" class="col-sm-10 col-md-5 col-lg-5 mx-auto">
            
            <form action="add-product.php" method="POST">
                <h1>Add product</h1>
                
                <label><b>Product name</b></label>
                <input type="text" placeholder="Enter the product name" name="nom" required>

                <label><b>Description</b></label>
                <input type="text" placeholder="Enter the product description" name="description" required>

                <label><b>Description</b></label>
                <input type="date" name="date" required>

                <input type="submit" id='submit' value='ADD' >
            </form>
            
        </div>
        <div id="container2" class="col-sm-10 col-md-5 col-lg-5 mx-auto">

            <form action="add-user.php" method="POST">
                <h1>Add user</h1>
                
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter the username" name="username" required>

                <label><b>Password</b></label>
                <input type="text" placeholder="Enter the user password" name="mdp" required>

                <label><b>Role</b></label>
                <select name="role" id="select">
                    <option value="2">Utilisateur</option>
                    <option value="3">Administrateur</option>
                </select>

                <input type="submit" id='submit' value='ADD' >
            </form>
        </div>
</div>
    
<?php
include('../footer.php');
?>
