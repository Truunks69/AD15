<?php
include('config.php');

$del_id = $_GET['id'];
$del = 'DELETE FROM produit WHERE id = "'.$del_id.'"';
$req = $connexion->query($del);
header('Location: admin/index.php');


?>