<?php
$host = "localhost";
$user = "root";
$pass = "";

$mysql = mysqli_connect($host, $user, $pass, "aula");

if (mysqli_connect_errno($mysql)) {
    echo "Falha ao conectar ao banco de dados: " . mysqli_connect_error();
}

$sqlQuery = "SELECT * FROM user";

if (mysqli_query($mysql, $sqlQuery)) {
    $row = mysqli_fetch_assoc($rs);
}
?>