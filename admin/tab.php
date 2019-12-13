<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">

        <title>Acceuil</title>
    </head>
    <p><a href="index.php"><img src="../img/back.svg" alt="back" style="width: 70px; height: 70px;"></a></p>
    <div id="container3" style="margin-bottom: 90px;" class="col-sm-10 col-md 6 col-lg-8">
        <h1>Produits</h1>
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <?php
            include('../config.php');
            $sqlproduct = "SELECT nom, description, date, id FROM produit ORDER BY date DESC LIMIT 10";
            $req = $connexion->query($sqlproduct);
            $product_content = $req->fetchAll(PDO::FETCH_ASSOC);

            foreach ($product_content as $key => $value) {
                echo'<tbody>
                    <tr>
                        <th scope="row">'.$value['id'].'</th>
                        <td>'.$value['nom'].'</td>
                        <td>'.$value['description'].'</td>
                        <td>'.$value['date'].'</td>
                    </tbody>';
            }
            ?>
        </table>
    </div>
<?php
include('../footer.php');
?>