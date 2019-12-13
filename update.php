<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <title>Acceuil</title>
    </head>
<div id="container">            
            <form method="POST">
                <h1>Update</h1>
                
                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer la modification" name="newNom">

                <label><b>Description</b></label>
                <input type="text" placeholder="Entrer la modification" name="newDescription">

                <label><b>Date</b></label>
                <input type="date" placeholder="Entrer la modification" name="newDate">

                <input type="submit" id='submit' value='SAVE' >
            </form>
        </div>
<?php
include('footer.php');
$upd_id = $_GET['id'];
$new_nom = $_POST['newNom'];
$new_description = $_POST['newDescription'];
$new_date = $_POST['newDate'];

if(isset($_POST['newNom']) && isset($_POST['newDescription']) && isset($_POST['newDate'])){

$upd = 'UPDATE produit SET nom = "'.$new_nom.'", description= "'.$new_description.'", date= "'.$new_date.'" WHERE id = "'.$upd_id.'"';
$req = $connexion->query($upd);
header('Location: admin/index.php');
}
?>