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
        <!-- <center>
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
        </center> -->

        <!-- fetch data -->

        <div class="container">

        <table class="table">
  <thead>
    <button><a href="un.php">ajouter</a></button>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
      
     
      
      
      
      
    </tr>
  </thead>
  <tbody>
     
        <?php
        include 'config.php';
        $pic = mysqli_query($con,"SELECT * FROM `produit`");
        while($row = mysqli_fetch_array($pic)){
        echo "
            <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[price]</td>
                <td><img src='$row[image]'  width = '200px'  height = '70px'></td>
                <td><a href='delete.php? id= $row[id]' class = 'btn btn-danger'>Delete</a></td>
                <td><a href='updat.php? id= $row[id]' class = 'btn btn-danger'>Update</a></td>
                <td></td>
                
                
                
            </tr>
            ";
        }
        
        ?>


  </tbody>
</table>
</div>
</body>
</html>