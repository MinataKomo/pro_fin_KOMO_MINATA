<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    input{
        margin: 10px;
    }
</style>
</head>
<body>


<?php

include 'db_conn.php';
$id = $_GET['id'];
$Record = mysqli_query($conn,"SELECT * FROM `produit` WHERE id = $id");
$data = mysqli_fetch_array($Record);

?>
      <style>
        .wrapper{
            width: 700px;
            margin: 0 auto;
        }
    </style>

<center>
        <div class="wrapper">
        <form action="update1.php" method="POST" enctype="multipart/form-data" >
        <label for="">Name:</label>
        <input type="text" value="<?php echo $data['name'] ?>" name="name" class="form-control"><br>
        <label for="">Price :</label>
        <input type="text" value="<?php echo $data['price'] ?>" name="price" id="" class="form-control"><br>
        <label for="">Image:</label>
        <td><input class="form-control" type="file" name="image" value="<?php echo $data['image'] ?>"><img src="<?php echo $data['image'] ?>"  width = '300px'  height = '100px' alt=""> </td><br>
            <input type="hidden" name="id"  value="<?php echo $data['id'] ?>" class="form-control">
        <button type="submit" name="update" class = 'btn btn-danger m-2'>Update</button>

        </form>
    </div>
        </center>


       

    </body>    
</html>