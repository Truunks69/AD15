<?php
include('config.php');


if(isset($_POST) && !empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
$login = $_POST['pseudo'];
$pass = $_POST['mdp'];
  extract($_POST);
  $sql = "SELECT mdp FROM utilisateur WHERE pseudo='".$login."'";
  $req = $connexion->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
  $data = $req->fetchAll(PDO::FETCH_ASSOC);
  if($data[0]['mdp'] != $pass) {
    echo '<p style="color: #fff; text-align: center;">Mauvais login / password. Merci de recommencer</p>';
    include('login-form.php'); 
    exit;
  }
  else {
    session_start();
    $_SESSION['pseudo'] = $login;
    $sqrole = "SELECT id_role FROM utilisateur WHERE pseudo='".$login."'";
    $req2 = $connexion->query($sqrole) or die('Erreur SQL !<br>'.$sqrole.'<br>'.mysql_error());
    $id_role = $req2->fetchAll(PDO::FETCH_ASSOC);
    if($id_role[0]['id_role'] == '3'){
        header('Location: admin/index.php');
    }
    elseif ($id_role[0]['id_role'] == '2') {
        header('Location: user/index.php');
    }
    else {
        echo "Demandez a l'admin de creer un compte";
    }
  }   
}
else {
  echo '<p style="color: #fff; text-align: center;">Vous avez oublié de remplir un champ.</p>';
   include('login-form.php'); 
   exit;
}


?>