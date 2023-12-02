<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include 'config.php';
        ?>
<center>
        <div class="main">
        <form action="insert.php" method="POST" enctype="multipart/form-data" >
        <label for="">Name:</label>
        <input type="text" name="name"><br>
        <label for="">Price :</label>
        <input type="text" name="price" id=""><br>
        <label for="">Image:</label>
        <input type="file" name="image" id=""><br>
        <button type="submit" name="upload">Upload</button>

        </form>
    </div>
</body>
</html>