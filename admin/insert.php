

<?php
// include db connection
include 'db_conn.php';

if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadimage/'.$img_name);

    // insert data

    mysqli_query($conn,"INSERT INTO `produit`( `name`, `price`, `image`) VALUES ('$NAME','$PRICE','$img_des')");
    header("location:produit.php");

}

?>