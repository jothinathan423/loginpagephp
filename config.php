<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginpage";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("Connection Failed" . $conn->connection_error);
}
?>

