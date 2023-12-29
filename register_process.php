<?php
include_once 'Database.php';
include_once 'Utilisateur.php';

$database = new Database();
$db = $database->getConnection();

$user = new Utilisateur($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user->Nom = $_POST['nom'];
    $user->Prenom = $_POST['prenom'];
    $user->DateNaissance = $_POST['date_naissance'];
    $user->Email = $_POST['email'];
    $user->MotDePasse = $_POST['mot_de_passe'];

    if ($user->signup()) {
        header("Location: login.php");
        exit;
    } else {
        echo "Error during registration.";
    }
}
?>
