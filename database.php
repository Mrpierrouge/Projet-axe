<?php
$host = "localhost";
$db = "projet_axe";
$user = "root";
$pass = "";

try {
    $database = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} catch (PDOException $ex) {
    die("Attendez ça marche pas... " . $ex->getMessage());
}
?>