<?php
namespace Phppot;

class Member
{

    private $ds;

    function __construct()
    {
        include "db_conn.php" ;
        $this->ds = new DataSource();
    }

    public function getMember($email)
    {
        $query = 'SELECT * FROM crud where email = ?';
        $paramType = 's';
        $paramValue = array(
            $email
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;
    }

    public function loginMember()
    {
        $memberRecord = $this->getMember($_POST["email"]);
        $loginPassword = 0;
        if (! empty($memberRecord)) {
            if (! empty($_POST["password"])) {
                $password = $_POST["password"];
            }
            $hashedPassword = $memberRecord[0]["password"];
            $loginPassword = 0;
            if (password_verify($password, $hashedPassword)) {
                $loginPassword = 1;
            }
        } else {
            $loginPassword = 0;
        }
        if ($loginPassword == 1) {
            // login sucess so store the member's username in
            // the session
            session_start();
            $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $password = $_POST['password'];
            session_write_close();
            $url = "home.php";
            header("Location: $url");
        } else if ($loginPassword == 0) {
            $loginStatus = "Invalid username or password.";
            return $loginStatus;
        }
    }
}?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div
    class="d-flex flex-column min-vh-100 justify-content-center align-items-center"
    id="template-bg-3">
    <div class="card mb-5 p-5  bg-dark bg-gradient text-white col-md-4">
        <div class="card-header text-center">
            <h3>Login</h3>
        </div>
        <div class="card-body mt-3">
            <form name="login" action="" method="post">
                <div class="input-group form-group mt-3">
                    <input type="text"
                        class="form-control text-center p-3"
                        placeholder="email" name="email">
                </div>
                <div class="input-group form-group mt-3">
                    <input type="password"
                        class="form-control text-center p-3"
                        placeholder="Password" name="password">
                </div>
                <div class="text-center">
                    <input type="submit" value="Login"
                        class="btn btn-primary mt-3 w-100 p-2"
                        name="login-btn">
                </div>
            </form>
                <?php if(!empty($loginResult)){?>
                <div class="text-danger"><?php echo $loginResult;?></div>
                <?php }?>
            </div>
        <div class="card-footer p-3">
            <div class="d-flex justify-content-center">
                <div class="text-primary">If you are a registered user,
                    login here.</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>