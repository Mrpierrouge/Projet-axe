<?php
session_start();
$_SESSION['user_actif'] = [];
require_once 'database.php';



header("Location: accueil/index.php");
?>