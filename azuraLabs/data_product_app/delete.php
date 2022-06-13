<?php
    include "connect.php";

    $id = $_GET["id"];
    $deleteProduct = mysqli_query($connection, "DELETE FROM product WHERE id = '$id'");

    echo "
        <script> 
            alert('Data siswa berhasil dihapus!');
            window.location.replace('home.php');
        </script>
    ";

    //https://stackoverflow.com/questions/40331993/get-data-depend-on-particular-id-using-php-and-mysql
?>

