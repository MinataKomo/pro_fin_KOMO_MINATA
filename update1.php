<?php
include 'config.php';
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,''.$img_name);

    mysqli_query($con,"UPDATE `produit` SET `name`='$NAME',`price`='$PRICE',`image`='$img_des' WHERE id = '$id' ");
    header("location:index.php");


}
?>
