<?php
session_start();
require_once '../database.php';
ini_set("date.timezone", "Europe/Paris");

$request = $database->prepare("SELECT * FROM postes INNER JOIN utilisateurs ON postes.user_id = utilisateurs.id ORDER BY date DESC");
$request->execute();
$postes = $request->fetchALL(PDO::FETCH_ASSOC);
$_SESSION["tag_actif"] = "";

$request = $database->prepare("SELECT * FROM utilisateurs");
$request->execute();
$utilisateurs = $request->fetchALL(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (!empty($_POST['tag']) && $_POST['tag'] != "Annuler les filtres") {
        $TAG = "#" . $_POST['tag'];
        $data = [
            "tag" => "%" . $TAG . "%"
        ];

        $request = $database->prepare("SELECT * FROM postes INNER JOIN utilisateurs ON postes.user_id = utilisateurs.id WHERE tag LIKE :tag ORDER BY date DESC");
        $request->execute($data);
        $postes = $request->fetchALL(PDO::FETCH_ASSOC);
        $_SESSION["tag_actif"] = 'tag_'.$_POST['tag'];
    }
    elseif ($_POST['tag'] = "Annuler les filtres") {
        $_SESSION["tag_actif"] = "";
    }
}
if ($_SERVER['REQUEST_METHOD'] === "GET"){
    if (!empty($_GET['pseudo'])) {
        $data = [
            "pseudo" => $_GET['pseudo']
        ];

        $request = $database->prepare("SELECT * FROM postes INNER JOIN utilisateurs ON postes.user_id = utilisateurs.id WHERE pseudo LIKE :pseudo ORDER BY date DESC");
        $request->execute($data);
        $postes = $request->fetchALL(PDO::FETCH_ASSOC);
    }
}

require_once 'index.template.php';
?>