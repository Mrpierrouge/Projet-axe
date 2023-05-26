<?php
session_start();
require_once "../database.php";
$request = $database->prepare("SELECT * FROM utilisateurs");
$request->execute();
$utilisateurs = $request->fetchALL(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (
        isset($_POST['form'])
        && $_POST['form'] === "formulaire_ajout_compte"
    ) {
        if (
            !empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['prenom'])
        ) {
            foreach ($utilisateurs as $utilisateur) {
                if ($utilisateur['pseudo'] == $_POST['pseudo']) {
                    die("Pseudo déjà existant");
                }
            }
            $data = [
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'pseudo' => $_POST['pseudo'],
                'mail' => $_POST['mail'],
                'mdp' => password_hash($_POST['mdp'],PASSWORD_BCRYPT),
                'photo' => ""
            ];
            $request = $database->prepare("INSERT INTO utilisateurs (nom, prenom, pseudo, mail, mdp, photo) VALUES (:nom, :prenom, :pseudo, :mail, :mdp, :photo)");
            $request->execute($data);     
        }
    }
    header("Location: index.php");
}
?>