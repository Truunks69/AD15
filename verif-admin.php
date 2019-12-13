<?php
$login = $_SESSION['pseudo'];
$check = "SELECT id_role FROM utilisateur WHERE pseudo='".$login."'";
$req = $connexion->query($check);
$data = $req->fetchAll(PDO::FETCH_ASSOC);

if ($data[0]["id_role"] != 3) {
    echo "Vous n'êtes pas autorisé a acéder à cette page.";
    die();
}
?>