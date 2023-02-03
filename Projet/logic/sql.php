<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "kilyangerard_phpj7";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "kilyangerard";
$password = "e17f39e5cb4de95dba99a2edd6835ab4";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
?>