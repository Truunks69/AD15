<?php
session_start();
include('../config.php');
include('../verif-user.php');

if (isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['date'])) {
    $nom = $_POST["nom"];
	$description = $_POST["description"];
    $date = $_POST["date"];
    
    $queryy = "INSERT INTO `produit`(`id`, `nom`, `description`,`date`) VALUES (NULL,'".$nom."','".$description."','".$date."')";
    $requete = $connexion->query($queryy);
    header("Location: index.php");
}

?>