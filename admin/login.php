<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" href="s.css" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
require('db_conn.php');
session_start();

// if (isset($_POST['submit'])){
//   $first_name = stripslashes($_REQUEST['first_name']);
//   $first_name = mysqli_real_escape_string($conn, $first_name);
//   $last_name = stripslashes($_REQUEST['last_name']);
//   $last_name = mysqli_real_escape_string($conn, $last_name);

//   $email = stripslashes($_REQUEST['email']);
//   $email = mysqli_real_escape_string($conn, $email);
 

if (isset($_POST["submit"])) {
  // $first_name = $_POST['first_name'];
  // $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  // $gender = $_POST['gender'];
  $password = $_POST['password'];

    $query =  "SELECT * FROM `crud` WHERE email='$email' and password='$password'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
 
  if($rows==1){
      $_SESSION['email'] = $email;
      $_SESSION['password'] =$password;
$user = mysqli_fetch_assoc($result);
    
      if($user['role'] == 'admin') {
        header('Location: respon/o.php');
      }elseif($user['role'] == 'user'){
        header('Location: index.php' );
        echo '<?php echo $row["email"] ?> ';
      }
     
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }

  
}












?>
<style>
  #template-bg-3 {
	background-image: url('images.jpg');
}
</style>
<div
    class="d-flex flex-column min-vh-100 justify-content-center align-items-center"
    id="template-bg-3">
    <div class="card mb-5 p-5  bg-dark bg-gradient text-white col-md-4">
        <div class="card-header text-center">
            <h3>Login</h3>
        </div>
        <div class="card-body mt-3">
<form class="box" action="" method="post" name="login">
  <div class="input-group form-group mt-3">
<!-- <h1 class="box-logo box-title"><a href="">Site touristique</a></h1>
<h1 class="box-title">Connexion</h1> -->
<input type="email" class="form-control text-center p-3" name="email" placeholder="first_name">
</div>
<div class="input-group form-group mt-3">
<input type="password" class="form-control text-center p-3" name="password" placeholder="Mot de last_name">
</div>
<div class="text-center">
<input type="submit" value="Connexion " name="submit"  class="btn btn-primary mt-3 w-100 p-2">
</div>
<p class="box-register">Vous êtes nouveau ici? <a href="add-new.php">S'inscrire</a></p>
<button class="btn btn-secondary"><a href="transform.php">Annuler</a></button>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
<style>
  .errorMessage{
    background: red;
  }
</style>
</form>
</div>
</body>
</html>