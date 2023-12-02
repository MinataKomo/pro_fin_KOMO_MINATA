







<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=coton', 'root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}

catch (Exception $e){
    die("Error " . $e->getMessage());
}

$link = new mysqli("localhost", "root", "", "coton");



/* verifier connection */
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>