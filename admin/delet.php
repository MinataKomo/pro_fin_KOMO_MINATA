<?php
include 'db_conn.php';
 $id = $_GET['id'];
mysqli_query($conn,"DELETE FROM `produit` WHERE id = $id");










header('location:produit.php');

?>