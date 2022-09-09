<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "";

    $mysqli = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_errno($mysqli)){
        echo "Falha na conexão ao banco: " . mysqli_connect_errno();
    }
