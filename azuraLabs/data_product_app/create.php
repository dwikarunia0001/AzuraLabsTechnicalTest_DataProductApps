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
            if(isset($_POST["OK"])) {
                $name = $_POST["name"];
                $price = $_POST["price"];
                $rating = $_POST["rating"];
                $likes = $_POST["likes"];

                $insertProduct = "INSERT INTO product (name, price, rating, likes) VALUES ('$name','$price', '$rating', '$likes')";
                $result = mysqli_query($connection, $insertProduct);

                echo "
                    <script>
                        alert('Product berhasil ditambahkan!');
                        window.location.replace('home.php');
                    </script>
                ";
            }
    ?>

  <body>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2>Form Tambah</h2>

        <form method="POST">
          <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" name="name">
          </div>
          <div class="mb-3">
            <label for="exampleInputPrice1" class="form-label">Price</label>
            <input type="number" class="form-control" id="exampleInputPrice1" name="price">
          </div>
          <div class="mb-3">
            <label for="exampleInputRating1" class="form-label">Rating</label>
            <input type="number" class="form-control" id="exampleInputRating1" name="rating">
          </div>
          <div class="mb-3">
            <label for="exampleInputLikes1" class="form-label">Likes</label>
            <input type="number" class="form-control" id="exampleInputLikes1" name="likes">
          </div>
          <input type="submit" name="OK" value="Tambah" class="btn btn-primary">
          <button class="btn btn-dark"><a href="home.php" style="text-decoration:none" class="text-white">Back</a></button>
        </form>
      </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>