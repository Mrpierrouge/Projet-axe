<?php
session_start();
require_once '../database.php';
ini_set("date.timezone", "Europe/Paris");

$request = $database->prepare("SELECT * FROM utilisateurs");
$request->execute();
$utilisateurs = $request->fetchALL(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    if (!empty($_GET['recherche'])) {
        $data = [
            "recherche" => "%" . $_GET['recherche'] . "%"
        ];
        $request = $database->prepare("SELECT * FROM utilisateurs WHERE pseudo LIKE :recherche");
        $request->execute($data);
        $utilisateurs = $request->fetchALL(PDO::FETCH_ASSOC);
    }
}
require_once 'index.template.php';
?>