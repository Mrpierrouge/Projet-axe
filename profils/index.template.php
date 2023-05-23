<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/1main.css">
</head>

<body id="body" class="theme_light theme_grp2">

    <?php require_once '../navbar.php' ?>


    <?php require_once '../popups.php'; ?>


    <?php
    if (isset($_SESSION['user_actif']['pseudo'])) {
        echo'<div id="bouton_poster" class="theme_dark theme_grp1">
        <img src="../img/AjouterBlanc.png" alt="ajouter" id="AjouteLight" class="PictoAjoute">
        <img src="../img/AjouterBleu.png" alt="ajouter" id="AjouteDark" class="PictoAjoute">
    </div>';
    echo '<script src="../js/popup_poster.js"></script>';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    
    <!-- <script src="../js/popup_poster.js"></script> -->
    <script src="../js/theme.js"></script>
    <script src="../js/compte.js"></script>
</body>

</html>