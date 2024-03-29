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

<body id="body" class="theme_light theme_grp2">

    <?php require_once '../navbar.php'; ?>


    <section id="zone_tags" class="offset-3 col-6">

        <h1>TAGS</h1>

        <div id="tags">
            <form method="POST">
                <input type="submit" class="tag theme_dark theme_grp1 <?php echo $_SESSION['tag_actif'] ?>" name="tag"
                    value="Bleu" id="TagBleu">
                <input type="submit" class="tag theme_dark theme_grp1 <?php echo $_SESSION['tag_actif'] ?>" name="tag"
                    value="Violet" id="TagViolet">
                <input type="submit" class="tag theme_dark theme_grp1 <?php echo $_SESSION['tag_actif'] ?>" name="tag"
                    value="Rose" id="TagRose">
                <input type="submit" class="tag theme_dark theme_grp1 <?php echo $_SESSION['tag_actif'] ?>" name="tag"
                    value="Rouge" id="TagRouge">
                <input type="submit" class="tag theme_dark theme_grp1 <?php echo $_SESSION['tag_actif'] ?>" name="tag"
                    value="Orange" id="TagOrange">
                <input type="submit" class="tag theme_dark theme_grp1 <?php echo $_SESSION['tag_actif'] ?>" name="tag"
                    value="Jaune" id="TagJaune">
                <input type="submit" class="tag theme_dark theme_grp1 <?php echo $_SESSION['tag_actif'] ?>" name="tag"
                    value="Vert" id="TagVert">
                <input type="submit" class="tag theme_dark theme_grp1 <?php echo $_SESSION['tag_actif'] ?>" name="tag"
                    value="Marron" id="TagMarron">
                <input type="submit" name="tag" value="Annuler les filtres" id="TagNone">
            </form>

        </div>

    </section>

    <?php require_once '../popups.php'; ?>
    <form method="GET">
        <input type="hidden" name="pseudo">
    </form>
    <section id="zone_posts">
        <?php foreach ($postes as $poste): ?>
            <div class="post theme_dark theme_grp1">
                <div class="EntetePoste">
                    <h2 class="<?php echo $_SESSION['tag_actif'] ?>">
                        <?php echo $poste['pseudo'] ?>
                    </h2>
                    <?php if (isset($_SESSION['user_actif']['pseudo']) && $_SESSION['user_actif']['pseudo'] === $poste['pseudo']) {
                        echo '<img src="../img/corbeille-blanc.png" class="CorbeilleBlanc" alt="Supprimer">
                    <img src="../img/corbeille-bleu.png" class="CorbeilleBleu" alt="Supprimer">
                    <div class="popup theme_light theme_grp1 PopUpSupprime">
                        <p> Voulez-vous vraiment supprimer ce post ?</p>
                        <form action="delete_post.php" method="POST">
                            <input type="hidden" name="form" value="formulaire_delete_poste">
                            <input type="hidden" name="poste_id" value="' . $poste['poste_id'] . '">
                            <input type="submit" value="Supprimer">
                            </form>
                        <button class="StopPopUp SupprimeNon"> Non </button>
                    </div>';
                    }
                    ;
                    ?>
                </div>
                <?php
                if ($poste['media'] != null) {
                    echo '<img src="' . $poste['media'] . '" class ="image_post theme_dark theme_grp2" alt ="image_poste">';
                }
                ; ?>
                <p class="description <?php echo $_SESSION['tag_actif'] ?>">
                    <?php echo $poste['contenu'] ?>
                </p>
                <?php if (isset($poste['tag'])) {
                    echo '<p class="poste_tag theme_dark' . $_SESSION['tag_actif'] . ' theme_grp1">' . $poste['tag'] . '</p>';
                } ?>
                <p class="<?php echo $_SESSION['tag_actif'] ?>">
                    <?php echo "Écrit le " . date("d/m/Y", strtotime($poste['date'])) . " à " . date("H:i", strtotime($poste['date'])) ?>
                </p>

            </div>
        <?php endforeach; ?>
    </section>

    <div id="bouton_poster" class="theme_dark theme_grp1">
        <img src="../img/AjouterBlanc.png" alt="ajouter" id="AjouteLight" class="PictoAjoute">
        <img src="../img/AjouterBleu.png" alt="ajouter" id="AjouteDark" class="PictoAjoute">
    </div>



    <?php if (!isset($_SESSION['user_actif']['pseudo'])) {
        echo '<script>
    AScroll = 0;
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
    <script src="../js/theme.js"></script>



</body>

</html>