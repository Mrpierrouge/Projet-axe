<?php
session_start();
require_once '../database.php';
ini_set("date.timezone", "Europe/Paris");

$request = $database->prepare("SELECT * FROM postes INNER JOIN utilisateurs ON postes.user_id = utilisateurs.id ORDER BY date DESC");
$request->execute();
$postes = $request->fetchALL(PDO::FETCH_ASSOC);

$request = $database->prepare("SELECT * FROM utilisateurs");
$request->execute();
$utilisateurs = $request->fetchALL(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (
        isset($_POST['form']) && $_POST['form'] === "formulaire_connection"
    ) {

        if (
            !empty($_POST['pseudo']) && !empty($_POST['mdp'])
        ) {
            foreach ($utilisateurs as $utilisateur) {
                if ($utilisateur['pseudo'] == $_POST['pseudo'] && password_verify($_POST['mdp'], $utilisateur['mdp'])) {
                    $_SESSION['user_actif'] = $utilisateur;
                    $_SESSION['id'] = $utilisateur['id'];
                } else {

                }
            }
        }
    }
}

if (isset($_SESSION['user_actif']['pseudo'])) {
    $request = $database->prepare("SELECT * FROM postes INNER JOIN utilisateurs ON postes.user_id = utilisateurs.id WHERE pseudo IN (:pseudo) ORDER BY date DESC");
    $data = [
        "pseudo" => $_SESSION['user_actif']['pseudo']
    ];
    $request->execute($data);
    $postes = $request->fetchALL(PDO::FETCH_ASSOC);
}



require_once 'index.template.php';
?>