<?php
session_start();

include_once 'Database.php';
include_once 'Utilisateur.php';

$database = new Database();
$db = $database->getConnection();

$user = new Utilisateur($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user->Email = $_POST['email'];
    $user->MotDePasse = $_POST['mot_de_passe'];

    $stmt = $user->login();

    if ($stmt->rowCount() == 1) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user'] = $row;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid email or password.";
    }
}
?>
