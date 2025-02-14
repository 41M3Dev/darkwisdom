<?php
require_once '../function/function.php';
    global $pdo;
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["pseudo"]) && !empty($_POST["pwd"])) {
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        $mdp = htmlspecialchars($_POST["pwd"]);
            try {
                $sql_login = getUser();
                $sql_login = $pdo->prepare($sql_login);
                $sql_login->execute();
                $users = $sql_login->fetchAll();
                foreach ($users as $user) {
                    if($user['pseudo'] == $pseudo ) {
                        if (password_verify($mdp, $user['mot_de_passe'])){
                            session_start();
                            $_SESSION['user_id'] = $user['id'];
                            $_SESSION['username'] = $user['nom'];
                            $_SESSION['pseudo'] = $user['prenom'];
                            $error = "Connexion réussi!!!";
                            header('Location: ../index.php');
                            exit();
                        }else{
                            $error = "Mot de passe incorrect !!!";
                        }
                    }else{
                        $error = "Votres pseudo est introuvable !!!";
                    }
                }
            }
            catch (PDOException $e) {
                echo $e->getMessage();
            }
    }
}
?>
<?php
// Démarrer la session si ce n'est pas déjà fait
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['user_id'])) {
    // Si l'utilisateur est connecté
    header('Location:../index.php');
    exit();
} else {
echo '
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marvel:ital,wght@0,400;0,700;1,400;1,700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Connexion | Dark Wisdom</title>

</head>
<body class="bodyCon">
<!--------------------------------- DEBUT NAVBAR -------------------------------------------->
<nav
        class="navbar fixed-top navbar-expand-lg bg-body-tertiary bg-dark"
        data-bs-theme="dark"
>
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Dark Wisdom</a>
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Citations</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">Inscription</a></li>
                <li class="nav-item"><a class="nav-link sp" href="login.php">Connexion</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="#">Favoris</a></li> -->
                <!-- <li class="nav-item ms-3">
                  <a class="nav-link" href="#"><i class="fa-regular fa-user"></i></a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
<!--------------------------------- FIN NAVBAR -------------------------------------------->
<div class="overlay">
    <form method="POST" action="#">
        <div class="con">
            <header class="head-form">
                <h2>Connexion</h2>
            </header>
            <br>
            <div class="field-set">
                <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
                <input class="form-input" id="pseudo" name="pseudo" type="text" placeholder="Pseudo" required>
                <br>
                <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
                <input class="form-input" type="password" placeholder="Mot de passe" id="pwd"  name="pwd" required>
                <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
                <br>
                <button class="log-in"> Connexion</button>
                <p>
                    <?php
                    if (isset($error)) {
                        echo $error;
                    }
                    ?>
                </p>
            </div>
            <div class="other">
                <button class="btn submits frgt-pass">Mot de passe oublié ?</button>
                <button class="btn submits sign-up">S\'incrire
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </form>
</div> ';}?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../script/index.js"></script>
</body>
</html>