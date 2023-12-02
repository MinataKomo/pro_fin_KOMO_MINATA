<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="s.css" />
</head>
<body>
<?php
require('config.php');
session_start();

if (isset($_POST['nom'])){
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($link, $nom);
  $prenom = stripslashes($_REQUEST['prenom']);
  $prenom = mysqli_real_escape_string($link, $prenom);
 



    $query =  "SELECT * FROM `user` WHERE nom='$nom' and prenom='$prenom'";
  $result = mysqli_query($link,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
 
  if($rows==1){
      $_SESSION['nom'] = $nom;
      $_SESSION['prenom'] = $prenom;
$user = mysqli_fetch_assoc($result);
    
      if($user['role_name'] == 'admin') {
        header('Location: respon/o.php');
      }elseif($user['role_name'] == 'utile'){
        header('Location: index.php');
      }
     
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }

  
}












?>
<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title"><a href="">Site touristique</a></h1>
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="nom" placeholder="nom">
<input type="text" class="box-input" name="prenom" placeholder="Mot de prenom">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="create.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>