<div id="popup_connexion" class="popup theme_dark theme_grp1">
  <img src="../img/logo-detourne.png" alt="logo">
  <p>Connectez vous pour continuer!</p>
  
  <a href="http://localhost/projet_axe/compte/index.php" id="SeConnecter"> Se connecter</a>

  <div class="zone_anim">
    <div class="cercle"></div>
    <div class="cercle" id="cercle2"></div>
    <div class="cercle" id="cercle3"></div>
  </div>
</div>

<div id="PopUpPoster" class="popup theme_dark theme_grp1">

  <button id="StopPoster" class="StopPopUp"> Fermer </button>
  <?php if (isset($_SESSION['user_actif']['pseudo'])) {
    echo '<h2>Poster</h2>
      <form action="ajout.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="form" value="formulaire_ajout_poste">
        <input type="hidden" name="user" value="' . $_SESSION['user_actif']["id"] . '">
        <label for="media">Photo : </label>
        <input type="file" accept="image/png, image/jpeg" name="media" id="media">
        <br>
        <label for="contenu">Contenu :</label>
        <br>
        <textarea name="contenu" id="contenu" cols="30" rows="10"  required></textarea>
        <br>
        <label for="tag"> Tags </label>

      <select name="tag" id="tag">
        <option value=""></option>
        <option value="#Bleu">#Bleu</option>
        <option value="#Violet">#Violet</option>
        <option value="#Rose">#Rose</option>
        <option value="#Rouge">#Rouge</option>
        <option value="#Orange">#Orange</option>
        <option value="#Jaune">#Jaune</option>
        <option value="#Vert">#Vert</option>
        <option value="#Marron">#Marron</option>
      </select>
        <input type="submit" value="Envoyer">
      </form>

      <script>

    tag.value = localStorage.getItem("tag");
    tag.onchange = () => {
        localStorage.setItem("tag", tag.value)
    };
    contenu.value = localStorage.getItem("contenu");
    contenu.oninput = () => {
        localStorage.setItem("contenu", contenu.value)
    };
 
      </script>';
    echo '<br><br>';
    echo '<p>Actuellement sous le profil de : ' . $_SESSION['user_actif']['pseudo'];

  }
  ;
  if (!isset($_SESSION['user_actif']['pseudo'])) {
    echo '<img src="../img/logo-detourne.png" alt="logo">';
    echo "<p>vous n'êtes pas connecter<p>";
    echo '<a class="theme_dark theme_grp1  " id="lien_connexion" href="http://localhost/projet_axe/compte/index.php"> Se connecter</a>';
  }
  ?>
</div>