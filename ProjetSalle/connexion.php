<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "librairie";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}
$conn->set_charset("utf8");

 





