<?php
session_start();
require_once '../database.php';


if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (
        isset($_POST['form'])
        && $_POST['form'] === "formulaire_delete_poste"
    ) {
        if (
            !empty($_POST['poste_id'])
        ) {
            $data = [
                'poste_id' => $_POST['poste_id'],

            ];
            $request = $database->prepare("DELETE FROM postes WHERE id = :poste_id");
            $request->execute($data);
            header("Location: index.php");
        }
    }
}


?>