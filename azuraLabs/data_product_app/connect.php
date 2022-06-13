<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "azura_lab";
    $connection = mysqli_connect($server, $user, $password, $database);

    if(!$connection) {
        echo "Koneksi gagal: ".mysqli_connect_error();
    }
?>