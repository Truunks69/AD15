<?php
session_start();
include('../config.php');
include('../verif-admin.php');

if (isset($_POST['username']) && isset($_POST['mdp']) && isset($_POST['role'])) {
    $username = $_POST["username"];
	$mdp = $_POST["mdp"];
    $role = $_POST["role"];
    
    $queryy1 = "INSERT INTO `utilisateur`(`pseudo`, `mdp`,`id_role`) VALUES ('".$username."','".$mdp."','".$role."')";
    $requete1 = $connexion->query($queryy1);
    header("Location: index.php");
}

?>