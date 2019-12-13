<?php
session_start();
include('../config.php');
include('../verif-user.php');


$sqlproduct = "SELECT nom, description, date, id FROM produit";
$req = $connexion->query($sqlproduct) or die('Erreur SQL !<br>'.$sqlproduct.'<br>'.mysql_error());
$product_content = $req->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color: #0074c9;">
    <h1>Home User</h1>
    <button id = "b2"> <a href="../disconnect.php" style="padding-right: 15px; text-decoration: none;">Deconnexion</a></button>
    <p class='plus'><a href="add-form.php" style="text-decoration: none;" class="a">+</a></p>
    <h2 id="title">Products</h2>
    <div class="main row mx-auto">
        

                <?php

                foreach ($product_content as $key => $value) {
                    echo '<div class="mx-auto col-sm-10 col-md-3">
            <div class="contents ">';
                    echo $value['nom'];
                    echo '<hr>';
                    echo '<p>'.$value['description'].'</p>';
                    echo '<p>'.$value['date'].'</p>';
                    echo '</div>
                    </div> ';
                }
                ?>
                <!-- <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Voir plus...
                </a> -->

                                   
        <!-- <div class="collapse col-10 mx-auto" id="collapseExample">
            <div class="card card-body">
              <h5>Product name</h5>  
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, dolore. Cum repudiandae numquam nulla consequuntur quas perspiciatis quibusdam, accusamus beatae, libero officiis in esse pariatur iusto explicabo delectus velit nisi!
            </div> -->
        </div>

    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>