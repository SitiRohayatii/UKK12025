<?php
$servername = "localhost";
$database = "db_users";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Login Gagal : " . mysqli_connect_error());
} else {
    echo "Login Berhasil";
}
