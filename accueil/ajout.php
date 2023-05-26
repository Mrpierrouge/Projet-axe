<?php
session_start();
require_once "../database.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (
        isset($_POST['form'])
        && $_POST['form'] === "formulaire_ajout_poste"
    ) {
        if (
            !empty($_POST['contenu']) && empty($_FILES['media']['name'])
        ) {

            $data = [
                'contenu' => $_POST['contenu'],
                'user_id' => $_POST['user'],
                'tag' => $_POST['tag']
            ];
            $request = $database->prepare("INSERT INTO postes (contenu, user_id, date, tag) VALUES (:contenu, :user_id, NOW(), :tag)");
            $request->execute($data);
        } elseif (
            !empty($_POST['contenu'])
        ) {
            $data_img = [
                'img_link' => '../img/' . $_FILES['media']['name'],
                'img_file' => $_FILES['media']['tmp_name']
            ];
            move_uploaded_file($data_img['img_file'], $data_img['img_link']);
            $data = [
                'contenu' => $_POST['contenu'],
                'user_id' => $_POST['user'],
                'tag' => $_POST['tag'],
                'media' => $data_img['img_link']
            ];
            $request = $database->prepare("INSERT INTO postes (contenu, user_id, date, tag, media) VALUES (:contenu, :user_id, NOW(), :tag, :media)");
            $request->execute($data);
        }
        header("Location: index.php");
    }
}
?>