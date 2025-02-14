<?php
global $pdo;
require_once '../function/function.php';
require_once '../function/config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["pwd"]) && !empty($_POST["pwdR"])
        && !empty($_POST["pseudo"]) && !empty($_POST["mail"]) ) {
        $pwd = htmlspecialchars($_POST["pwd"]);
        $pwdR = htmlspecialchars($_POST["pwdR"]);
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $mail = htmlspecialchars($_POST["mail"]);
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            if ($pwd == $pwdR) {
                $pwd = password_hash($pwd, PASSWORD_DEFAULT);
                try {
                    $sql_i = inscriptionUtilisateur();
                    $pdo->prepare($sql_i)->execute([$nom, $prenom, $pseudo, $pwd,"utilisateur",$mail]);
                    $error = "Inscription réussi !!";
                }
                catch (PDOException $e) {
                    // Déterminer le champ en conflit
                    if ($e->getCode() == 23000) {
                        if (str_contains($e->getMessage(), 'pseudo_UNIQUE')) {
                            $error = "Le numéro de téléphone est déjà utilisé sur un  autre compte";
                        } elseif (str_contains($e->getMessage(), 'mail')) {
                            $error = "Adresse email déjà utilisée.";
                        }elseif(str_contains($e->getMessage(), 'mdp')) {
                            $error = "Le mot de passe est incorrect.";
                        }
                    }
                    echo $e->getMessage();
                }
            }
        }
    }
}
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

    }else{
        $error = "non";
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
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
    />
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="../styles/style_register.css">
</head>
<body>
<!--------------------------------- DEBUT NAVBAR -------------------------------------------->
<nav
        class="navbar fixed-top navbar-expand-lg bg-body-tertiary bg-dark"
        data-bs-theme="dark"
>
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">Dark Wisdom</a>
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
                <li class="nav-item"><a class="nav-link" href="../index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="citations.php">Citations</a></li> <?php
                // Démarrer la session si ce n'est pas déjà fait
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                // Vérifier si l'utilisateur est connecté
                if (isset($_SESSION['user_id']) && $_SESSION['roles'] == 'admin') {
                    // Si l'utilisateur est connecté
                    echo '<a class="nav-link" href="dashboard.php#dashboard">Dashboard</a>
                        <a class="nav-link" href="dashboard.php"><i class="fa-regular fa-user"></i></a>
                        <a class="nav-link sp" href="logout.php" label="déconnexion"><i class="bi bi-box-arrow-right"></i></a>';
                } elseif (isset($_SESSION['user_id']) && $_SESSION['roles'] == 'utilisateur') {
                    echo '<a class="nav-link" href="profil.php#favoris">Favoris</a>
                        <a class="nav-link" href="profil.php"><i class="fa-regular fa-user"></i></a>
                        <a class="nav-link sp" href="logout.php" label="déconnexion"><i class="bi bi-box-arrow-right"></i></a>';
                } else {
                    // Si l'utilisateur n'est pas connecté
                    echo '
                <li class="nav-item"><a class="nav-link" href="register.php">Inscription</a></li>
                <li class="nav-item"><a class="nav-link sp" href="login.php">Connexion</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!--------------------------------- FIN NAVBAR -------------------------------------------->
<section>
    <div class="overlayR">
        <form method="POST" action="#">
            <header class="head-form">
                <h2>Inscription</h2>
            </header>
            <div class="field-set container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <input class="form-input col-12 col-md-5" id="nom" name="nom" type="text" placeholder="Nom" required>
                    <div class="col-md-1"></div>
                    <input class="form-input col-12 col-md-5" type="prenom" placeholder="Prénom" id="prenom"  name="prenom" required>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <input class="form-input col-12 col-md-5" id="pseudo" name="pseudo" type="text" placeholder="Pseudo" required>
                    <div class="col-md-1"></div>
                    <input class="form-input col-12 col-md-5" type="mail" placeholder="Adresse mail" id="mail"  name="mail" required>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <input class="form-input col-12 col-md-5" id="pwd" name="pwd" type="password" placeholder="Mot de passe" required>
                    <div class="col-md-1"></div>
                    <input class="form-input col-12 col-md-5" type="password" placeholder="Confirmer votre mot de passe" id="pwdR"  name="pwdR" required>
                </div>
                <?php
                if (isset($error)) {

                    ?>
                    <div class="row">
                        <div class=" mt-2">
                            <p class="text-center msgErreur"><?=$error?></p>
                        </div>
                    </div>
                <?php } ?>
                <div class="row">
                    <button class="log-in mt-5"> S'inscrire</button>
                </div>
                <div class="other">
                    <button class="btn col-12 mt-1 col-md-5 submits frgt-pass">Mot de passe oublié ?</button>
                    <button class="btn col-12 mt-1 col-md-5 submits sign-up">Connexion
                    </button>
                </div>
            </div>
        </form>
    </div>

</section>
<?php }?>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
></script>
</body>
</html>