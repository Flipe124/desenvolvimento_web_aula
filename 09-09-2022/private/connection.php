<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "aula";

$mysqli = mysqli_connect($host, $user, $password, $database);

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

?>