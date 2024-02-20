<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbnama = "db_cashier";

$conn = new mysqli($servername,$username,$password, $dbnama);

if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}

echo "";

?>