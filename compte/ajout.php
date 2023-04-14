<?php
session_start();
require_once "../database.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (
        isset($_POST['form'])
        && $_POST['form'] === "formulaire_ajout_poste"
    ) {
        if (
            !empty($_POST['contenu'])
        ) {
            
            $data = [
                'contenu' => $_POST['contenu'],
                'user_id' => $_POST['user'],
                'tag' => $_POST['tag']
            ];
            $request = $database->prepare("INSERT INTO postes (contenu, user_id, date, tag) VALUES (:contenu, :user_id, NOW(), :tag)");
            $request->execute($data);
        }
        header("Location: index.php");
    }
}
?>