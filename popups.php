<div id="popup_connexion" class="popup theme_dark">

  CONNECTEZ-VOUS!
  <a href="http://localhost/projet_axe/compte/index.php" id="SeConnecter"> Se connecter</a>

</div>

<div id="PopUpPoster" class="popup theme_dark">

  <button id="StopPoster" class="StopPopUp"> Fermer </button>
  <?php if (isset($_SESSION['user_actif']['pseudo'])) {
    echo '<h2>Poster</h2>
      <form action="ajout.php" method="POST">
        <input type="hidden" name="form" value="formulaire_ajout_poste">
        <input type="hidden" name="user" value="' . $_SESSION['user_actif']["id"] . '">
        <label id="label_file">Photo : </label>
        <input type="file">
        <br>
        <label for="contenu">Contenu :</label>
        <br>
        <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Envoyer">
      </form>';
    echo '<br><br>';
    echo '<p>Actuellement sous le profil de : ' . $_SESSION['user_actif']['pseudo'];

  }
  ;
  if (!isset($_SESSION['user_actif']['pseudo'])) {
    echo "<p>vous n'êtes pas connecter<p>";
    echo '<a class="theme_dark  " id="lien_connexion" href="http://localhost/projet_axe/compte/index.php"> Se connecter</a>';
  }
  ?>
</div>