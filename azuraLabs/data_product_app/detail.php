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
        $data = mysqli_query($connection, 'SELECT name, price, rating, likes FROM product WHERE id = '.$_GET['id']);
    ?>

  <body style="max-width: max-content; margin: auto;">

    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1>Detail Product</h1>
        <?php while($rows = mysqli_fetch_array($data)) { ?>
          <div class="card" style="width: 30rem">
          <div class="card-body">
            <h5 class="card-title"><?php echo $rows["name"]?></h5>
            <p class="card-text">Price: <?php echo $rows["price"]?></p>
            <p class="card-text">Rating: <?php echo $rows["rating"]?></p>
            <p class="card-text">Likes: <?php echo $rows["likes"]?></p>
            <a href="#" class="btn btn-primary">Buy Now</a>
            <button class="btn btn-dark"><a href="home.php" style="text-decoration:none" class="text-white">Back</a></button>
          </div>
          </div>
        <?php } ?>
      </div>
    </div>

    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>