<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
    <?php
      include "connect.php";
      $dataProduct = mysqli_query($connection, 'SELECT * FROM product')
    ?>
  <body>
    <h1 style="text-align: center;"> Data Product</h1>
    
    <div class="row justify-content-center">
      <div class="col-md-10">
        <button class="btn btn-primary" ><a href="create.php" style="text-decoration:none" class="text-white">Tambah</a></button>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Rating</th>
              <th scope="col">Likes</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php while($rows = mysqli_fetch_array($dataProduct)) { ?>
            <tr>
                <td><?php echo $rows["name"]?></td>
                <td><?php echo $rows["price"]?></td>
                <td><?php echo $rows["rating"]?></td>
                <td><?php echo $rows["likes"]?></td>
                <td>
                    <button class="btn btn-warning"><a href="edit.php?id=<?php echo $rows['id'] ?>" style="text-decoration:none" class="text-white"> Edit </a></button>
                    <button class="btn btn-danger"><a href="delete.php?id=<?php echo $rows['id'] ?>" style="text-decoration:none" class="text-white"> Delete </a></button>
                    <button class="btn btn-success"><a href="detail.php?id=<?php echo $rows['id'] ?>" style="text-decoration:none" class="text-white"> Detail </a></button>
                </td>
            </tr>

            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>