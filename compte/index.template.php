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

    <?php require_once '../navbar.php'; ?>


    <?php if (isset($_SESSION['user_actif']['pseudo'])) {
        echo '<br>
        <section id="zone-test" class="offset-3 col-6">
        <h2>
        Vous êtes actuellement connecté sous le profil de : ' . $_SESSION['user_actif']['pseudo'] . '
        </h2>' . '<form action="deconnexion.php" method="POST">
      <input type="hidden" name="form" value="formulaire_deconnexion">
      <input type="submit" value="Se déconnecter">
      </form>' . '
        </section>
        <br><br><br>';
        echo '<section id="zone_posts">
        <h1>Vos postes : </h1>';
        foreach ($postes as $poste) {
            echo '
            <div class="post theme_dark theme_grp1">
                <div class="EntetePoste">
                    <h2>' .
                $poste['pseudo'] . '
                    </h2>
                    <img src="../img/corbeille-blanc.png" class="CorbeilleBlanc alt="supprimer poste">
                    <img src="../img/corbeille-bleu.png" class="CorbeilleBleu" alt="supprimer poste">
                </div>';
                if ($poste['media']!=null){
                    echo '<img src="' . $poste['media'] . '" class ="image_post theme_light theme_grp2" alt ="image_poste">';
                }
            echo '<p class="description">' . $poste['contenu'];
                if (isset($poste['tag'])){
                echo'<p class="poste_tag theme_dark theme_grp1">
                ' . $poste['tag'] . '
                </p>';
                }
                echo'</p>
                <p>
                Écrit le  ' . date("d/m/Y", strtotime($poste['date'])) . " à " . date("H:i", strtotime($poste['date'])) . '
                </p>
            </div>';
            echo '
                    <div class="popup theme_dark theme_grp1 PopUpSupprime">
                        <p> Voulez-vous vraiment supprimer ce post ?</p>
                        <form action="delete_post.php" method="POST">
                            <input type="hidden" name="form" value="formulaire_delete_poste">
                            <input type="hidden" name="poste_id" value="' . $poste['poste_id'] . '">
                            <input type="submit" value="Supprimer">
                            </form>
                        <button id="SupprimeNon" class="StopPopUp"> Non </button>
                    </div>';
        }
        echo '</section>';
        echo '<br><br><br>';
        echo '
        <div id="bouton_poster" class="theme_dark theme_grp1">
            <img src="../img/AjouterBlanc.png" alt="ajouter" id="AjouteLight" class="PictoAjoute">
            <img src="../img/AjouterBleu.png" alt="ajouter" id="AjouteDark" class="PictoAjoute">
        </div>';
        echo '<script src="../js/popup_poster.js">
        </script>';

    } elseif (!isset($_SESSION['user_actif']['pseudo'])) {
        echo '
        <section id="zone_formulaires" class="offset-1 offset-md-2 col-md-9 offset-lg-3">
        <div class="col-4 col-lg-3">
        <p>Créer un compte</p>
        <br>
        <form action="ajout_profil.php" method="POST">
        <input type="hidden" name="form" value="formulaire_ajout_compte">
        <label class="form-label" for="contenu">Nom</label>
        <br>
        <input class="form-control" name="nom" id="nom">
        <br>
        <label class="form-label" for="contenu">Prenom :</label>
        <br>
        <input class="form-control" name="prenom" id="prenom">
        <br>
        <label class="form-label" for="contenu">Mail</label>
        <br>
        <input class="form-control" name="mail" id="mail">
        <br>
        <label class="form-label" for="contenu">Pseudo :</label>
        <br>
        <input class="form-control" name="pseudo" id="pseudo">
        <br>
        <label class="form-label" for="contenu">Mot de passe</label>
        <br>
        <input class="form-control" type="password" name="mdp" id="mdp">
        <br>
        <label class="form-label" for="contenu">Photo de profil (url)</label>
        <br>
        <input class="form-control" name="photo" id="photo">
        <br>
        <input class="btn btn-primary" type="submit" value="Envoyer">
        </form>
        </div>
        <div class="offset-3 col-4 col-lg-3">
        <p>Se connecter</p>
        <br>
        <form action="" method="POST">
          <input type="hidden" name="form" value="formulaire_connection">
          <label class="form-label" for="contenu">Pseudo :</label>
          <br>
          <input class="form-control" name="pseudo" id="pseudo">
          <br>
          <label class="form-label" for="contenu">Mot de passe</label>
          <br>
          <input class="form-control" type="password" name="mdp" id="mdp">
          <br>
          <input class="btn btn-primary" type="submit" value="Envoyer">
        </form>
        </div>
        </section>
        ';
    } ?>
    <?php require_once("../popups.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="../js/compte.js"></script>
    <script src="../js/theme.js"></script>
</body>

</html>