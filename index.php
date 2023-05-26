<!DOCTYPE html>
<html lang="en">

<?php
session_start();
$_SESSION['user_actif'] = [];
$_SESSION['ListeTheme'] = ["theme_dark", "theme_light"];
$_SESSION['tag_actif'] = "";
require_once 'database.php';



header("Location: accueil/index.php");
?>