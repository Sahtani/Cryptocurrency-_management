<?php
session_start();

include_once 'Database.php';
include_once 'Utilisateur.php';

$database = new Database();
$db = $database->getConnection();

$user = new Utilisateur($db);

// User Registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    $user->Nom = htmlspecialchars($_POST['nom']);
    $user->Prenom = htmlspecialchars($_POST['prenom']);
    $user->DateNaissance = htmlspecialchars($_POST['date_naissance']);
    $user->Email = htmlspecialchars($_POST['email']);
    $user->MotDePasse = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

    if ($user->signup()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error during registration.";
    }
}

// User Login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signin"])) {
    $user->Email = htmlspecialchars($_POST['signin_email']);
    $user->MotDePasse = htmlspecialchars($_POST['signin_mot_de_passe']);

    $stmt = $user->login();

    if ($stmt->rowCount() == 1) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($_POST['signin_mot_de_passe'], $row['MotDePasse'])) {
            $_SESSION['user'] = $row;
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn&SignUp</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
      <div class="forms-container">
          <div class="signin-signup">
              <!-- Sign In Form -->
              <form action="" method="post" class="sign-in-form">
                  <h2 class="title">Sign In</h2>
                  <div class="input-field">
                      <i class="fas fa-user"></i>
                      <input type="text" name="signin_email" placeholder="Email" required />
                  </div>
                  <div class="input-field">
                      <i class="fas fa-lock"></i>
                      <input type="password" name="signin_mot_de_passe" placeholder="Password" required />
                  </div>
                  <input type="submit" name="signin" value="Login" class="btn solid" />
                  <!-- ... Social login buttons ... -->
              </form>

              <!-- Sign Up Form -->
              <form action="" method="post" class="sign-up-form">
                  <h2 class="title">Sign Up</h2>
                  <div class="input-field">
                      <i class="fas fa-user"></i>
                      <input type="text" name="nom" placeholder="Nom" required />
                  </div>
                  <div class="input-field">
                      <i class="fas fa-user"></i>
                      <input type="text" name="prenom" placeholder="Prénom" required><br>
                  </div>
                  <div class="input-field">
                      <i class="fas fa-user"></i>
                      <input type="date" name="date_naissance" placeholder="Date de Naissance" required><br>
                  </div>
                  <div class="input-field">
                      <i class="fas fa-envelope"></i>
                      <input type="email" name="email" placeholder="Email" required />
                  </div>
                  <div class="input-field">
                      <i class="fas fa-lock"></i>
                      <input type="password" name="mot_de_passe" placeholder="Password" required />
                  </div>
                  <input type="submit" name="signup" value="Sign Up" class="btn solid" />
                  <!-- ... Social signup buttons ... -->
              </form>
          </div>
      </div>

      <div class="panels-container">

        <div class="panel left-panel">
            <div class="content">
                <h3>New here?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>
                <button class="btn transparent" id="sign-up-btn">Sign Up</button>
            </div>
            <img src="./img/log.svg" class="image" alt="">
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>One of us?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>
                <button class="btn transparent" id="sign-in-btn">Sign In</button>
            </div>
            <img src="./img/register.svg" class="image" alt="">
        </div>
      </div>
    </div>

    <script src="./app.js"></script>
</body>
</html>
