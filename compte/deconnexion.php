<?php
session_start();
require_once "../database.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (
        isset($_POST['form'])
        && $_POST['form'] === "formulaire_deconnexion"
    ) {
        $_SESSION['user_actif'] = [];
        header("Location: index.php");
    }
}
?>