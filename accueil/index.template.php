<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/1main.css">
</head>

<body id="body" class="theme_light">

    <?php require_once '../navbar.php'; ?>




    <section id="zone_tags" class="offset-3 col-6">

        <h1>TAGS</h1>

        <div id="tags">
            <div class="tag">#tag1</div>
            <div class="tag">#tag2</div>
            <div class="tag">#tag3</div>
            <div class="tag">#tag4</div>
            <div class="tag">#tag5</div>
            <div class="tag">#tag6</div>
            <div class="tag">#tag7</div>
            <div class="tag">#tag8</div>
            <div class="tag">#tag9</div>
            <div class="tag">#tag10</div>
            <div class="tag">#tag11</div>
            <div class="tag">#tag12</div>
            <div class="tag">#tag13</div>
            <div class="tag">#tag14</div>
        </div>

    </section>

    <?php require_once '../popups.php'; ?>

    <section id="zone_posts">
        <?php foreach ($postes as $poste): ?>
            <div class="post theme_dark">
                <div class="EntetePoste">
                    <h2>
                        <?php echo $poste['pseudo'] ?>
                    </h2>
                    <?php if (isset($_SESSION['user_actif']['pseudo']) && $_SESSION['user_actif']['pseudo'] === $poste['pseudo']) {
                        echo '<img src="../img/corbeille-blanc.png" class="CorbeilleBlanc">
                    <img src="../img/corbeille-bleu.png" class="CorbeilleBleu">
                    <div id="PopUpSupprime" class="popup theme_dark PopUpSupprime">
                        <p> Voulez-vous vraiment supprimer ce post ?</p>
                        <form action="delete_post.php" method="POST">
                            <input type="hidden" name="form" value="formulaire_delete_poste">
                            <input type="hidden" name="poste_id" value="' . $poste['id'] . '">
                            <input type="submit" value="Supprimer">
                            </form>
                        <button id="SupprimeNon" class="StopPopUp"> Non </button>
                    </div>';
                    }
                    ;
                    ?>
                </div>
                <p class="description">
                    <?php echo $poste['contenu'] ?>
                </p>
                <p>
                    <?php echo "Écrit le " . date("d/m/Y", strtotime($poste['date'])) . " à " . date("H:i", strtotime($poste['date'])) ?>
                </p>

            </div>
        <?php endforeach; ?>
    </section>

    <div id="bouton_poster" class="theme_dark">
        <img src="../img/AjouterBlanc.png" alt="ajouter" id="AjouteLight" class="PictoAjoute">
        <img src="../img/AjouterBleu.png" alt="ajouter" id="AjouteDark" class="PictoAjoute">
    </div>



    <?php if (!isset($_SESSION['user_actif']['pseudo'])) {
        echo '<script>
    const ScrollConnexion = () => {
            if (AScroll > 100) {
                popup_connexion.style.opacity = 1;
                popup_connexion.style.display = "flex";
                zone_postes.style.filter = "blur(15px)";
                ZoneTags.style.filter = "blur(15px)";
            }
            AScroll = AScroll + 1; 
    }
    document.addEventListener("scroll",ScrollConnexion);
    </script>';
    } ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
    <script src="../js/popup_poster.js"></script>
</body>

</html>