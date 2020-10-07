<?php

$server_name = "localhost";
$db_user_name = "root";
$db_password = "";
$db_name = "old_school";

$conn = mysqli_connect($server_name, $db_user_name, $db_password, $db_name);

if (!$conn) {
    die("Conexión a la base de datos falló: " . mysqli_connect_error());
}
