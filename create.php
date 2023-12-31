<?php
/* Inclure le fichier config */
require_once "config.php";
 
/* Definir les variables */
$nom = $prenom = $ecole = $age = $email = "";
$name_err = $prenom_err = $ecole_err = $age_err = $email_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    /* Validate name */
    $input_name = trim($_POST["nom"]);
    if(empty($input_name)){
        $name_err = "Veillez entrez un nom.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Veillez entrez a valid name.";
    } else{
        $nom = $input_name;
    }


    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Veillez entrez un email.";
    } elseif(!filter_var($input_email, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $email_err = "Veillez entrez a valid email.";
    } else{
        $email = $input_email;
    }

     /* Validate prenom */
    $input_prenom = trim($_POST["prenom"]);
    if(empty($input_prenom)){
        $prenom_err = "Veillez entrez un prenom.";
    } elseif(!filter_var($input_prenom, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $prenom_err = "Veillez entrez a valid name.";
    } else{
        $prenom = $input_prenom;
    }
    
    /* Validate ecole */
    $input_ecole = trim($_POST["ecole"]);
    if(empty($input_ecole)){
        $ecole_err = "Veillez entrez une ecole.";     
    } else{
        $ecole = $input_ecole;
    }
    
    /* Validate age */
    $input_age = trim($_POST["age"]);
    if(empty($input_age)){
        $age_err = "Veillez entrez l'age.";     
    } elseif(!ctype_digit($input_age)){
        $age_err = "Veillez entrez une valeur positive.";
    } else{
        $age = $input_age;
    }
    
    /* verifiez les erreurs avant enregistrement */
    if(empty($name_err) && empty($prenom_err) && empty($ecole_err) && empty($age_err) && empty($email_err)){
        /* Prepare an insert statement */
        $add = 'utile';
        $sql = "INSERT INTO user (nom, prenom, ecole, age, email, role_name) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            /* Bind les variables à la requette preparée */
            mysqli_stmt_bind_param($stmt, "ssssds", $param_nom, $param_prenom, $param_ecole, $param_age, $param_email, $param_add);
        
            /* Set parameters */
            $param_nom = $nom;
            $param_add = $add;
            $param_email = $email;
            $param_prenom = $prenom;
            $param_ecole = $ecole;
            $param_age = $age;
            // $param_age = $age;
            
            /* executer la requette */
            if(mysqli_stmt_execute($stmt)){
                /* opération effectuée, retour */
                header("location: login.php");
                exit();
            } else{
                echo "Oops! une erreur est survenue.";
            }
        }
         
        /* Close statement */
        mysqli_stmt_close($stmt);
    }
    
    /* Close connection */
    mysqli_close($link);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .wrapper{
            width: 700px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Créer un enregistrement</h2>
                    <p>Remplir le formulaire pour enregistrer l'étudiant dans la base de données</p>


                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nom; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Prenom</label>
                            <input type="text" name="prenom" class="form-control <?php echo (!empty($prenom_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $prenom; ?>">
                            <span class="invalid-feedback"><?php echo $prenom_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <textarea name="ecole" class="form-control <?php echo (!empty($ecole_err)) ? 'is-invalid' : ''; ?>"><?php echo $ecole; ?></textarea>
                            <span class="invalid-feedback"><?php echo $ecole_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control <?php echo (!empty($age_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $age; ?>">
                            <span class="invalid-feedback"><?php echo $age_err;?></span>
                        </div>






                        
                        <input type="submit" class="btn btn-primary" value="Enregistrer">
                        <a href="index.php" class="btn btn-secondary ml-2">Annuler</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>