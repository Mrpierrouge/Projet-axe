<?php
session_start();
require_once '../database.php';
ini_set("date.timezone", "Europe/Paris");

$request = $database->prepare("SELECT * FROM postes INNER JOIN utilisateurs ON postes.user_id = utilisateurs.id ORDER BY date DESC");
$request->execute();
$postes = $request->fetchALL(PDO::FETCH_ASSOC);

$request = $database->prepare("SELECT * FROM utilisateurs");
$request->execute();
$utilisateurs = $request->fetchALL(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    if (!empty($_GET['tag']) && $_GET['tag'] != "Annuler les filtres") {
        $data = [
            "tag" => "%" . $_GET['tag'] . "%"
        ];

        $request = $database->prepare("SELECT * FROM postes INNER JOIN utilisateurs ON postes.user_id = utilisateurs.id WHERE tag LIKE :tag ORDER BY date DESC");
        $request->execute($data);
        $postes = $request->fetchALL(PDO::FETCH_ASSOC);
    }
}

require_once 'index.template.php';
?>