<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
        include 'db_conn.php';
        ?>
         <style>
        .wrapper{
            width: 700px;
            margin: 0 auto;
            text-align: left;
        }
    </style>
<center>
        <div class="wrapper">
        <form action="insert.php" method="POST" enctype="multipart/form-data" >
        <div class="form-group">
        <label for="">Name:</label>
        <input type="text" name="name" class="form-control"><br>
        </div>
        <label for="">Price :</label>
        <input type="text" name="price" id="" class="form-control"><br>
        <label for="">Image:</label>
        <input type="file" name="image" id="" class="form-control"><br>
        <button type="submit" name="upload" class="btn btn-primary">Upload</button>
        <a href="produit.php" class="btn btn-secondary ml-2">Annuler</a>
        </form>
    </div>
</body>
</html>