<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dark Wisdom</title>
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/profil.css" />
    <?php include '../function/favoris.php'?>
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
              if (isset($_SESSION['user_id'])) {
                  // Si l'utilisateur est connecté
                  echo '<li class="nav-item"><a class="nav-link" href="register.php">Favoris</a></li>
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
    <!---------------------------------  Section Titre  -------------------------------------------->
<section class="profil_section">
    <div class="container cont-profil">
        <!-- Section Profil -->
        <div class="row">
            <div class="col-md-6 mx-auto" >
                <div class="profile-card p-4">
                    <h1 class="text-center">Mon Profil</h1>
                    <?php if (isset($_SESSION['success_message'])): ?>
                        <div id="alert-message" class="alert alert-success text-center">
                            <?= $_SESSION['success_message']; ?>
                        </div>
                        <?php unset($_SESSION['success_message']); ?>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['error_message'])): ?>
                        <div id="alert-message" class="alert alert-danger text-center">
                            <?= $_SESSION['error_message']; ?>
                        </div>
                        <?php unset($_SESSION['error_message']); ?>
                    <?php endif; ?>

                <form action="../function/modifier_profil.php" method="POST">   
                     <?php include '../function/get_profil.php'; ?>
                        <div class="mb-3">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" name="nom" value="<?= htmlspecialchars($user['nom']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Prénom</label>
                            <input type="text" class="form-control" name="prenom" value="<?= htmlspecialchars($user['prenom']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pseudo</label>
                            <input type="text" class="form-control" name="pseudo" value="<?= htmlspecialchars($user['pseudo']) ?>" required>
                            </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="mail" value="<?= htmlspecialchars($user['mail']) ?>" required>
                        </div>
                        <button type="submit" class="btn btn-light w-100 mt-2">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>

<div id="favoris" class="container mt-5 contfav">
    <h2 class="text-center mb-4">⭐ Citations Favorites</h2>

    <?php if (empty($citations_par_theme)): ?>
        <p class="text-center">Vous n'avez aucune citation favorite pour l'instant.</p>
    <?php else: ?>
      <?php if (isset($_GET['message']) && $_GET['message'] === 'success'): ?>
                                <div class="alert alert-success">Citation supprimée avec succès !</div>
                            <?php elseif (isset($_GET['message']) && $_GET['message'] === 'error'): ?>
                                <div class="alert alert-danger">Erreur lors de la suppression.</div>
                            <?php endif; ?>
        <?php foreach ($citations_par_theme as $theme => $citations): ?>
            <div class="theme-section">
                <h3>📌 <?= htmlspecialchars($theme) ?></h3>
                <div class="quote-grid">
                    <?php foreach ($citations as $citation): ?>
                        <div class="quote-card">
                            <p>« <?= htmlspecialchars($citation['citation']) ?> »</p>
                            <small>- <?= htmlspecialchars($citation['auteur']) ?>, <?= htmlspecialchars($citation['source']) ?></small>
                            <br>
                            <a href="../function/supprimer_favori.php?id=<?= $citation['id'] ?>" class="btn btn-danger">
                              Retirer
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

    </div>
</section>
    <!---------------------------------  FOOTER -------------------------------------------->
    <footer class="footer  text-light text-center py-4">
  <div class="container">
    <div class="row">
      <!-- Liens vers les pages principales -->
      <div class="col-md-6 mb-3">
        <a href="index.html" class="footer-link">Accueil</a> |
        <a href="citations.html" class="footer-link">Citations</a> |
        <a href="favoris.html" class="footer-link">Favoris</a> |
        <a href="contact.html" class="footer-link">Contact</a>
      </div>
      <!-- Liens vers Mentions Légales & Politique -->
      <div class="col-md-6 mb-3">
        <a href="mentions-legales.html" class="footer-link">Mentions Légales</a> |
        <a href="politique-confidentialite.html" class="footer-link">Politique de Confidentialité</a>
      </div>
    </div>
    <p class="mt-3">© 2025 Dark Wisdom. Tous droits réservés.</p>
  </div>
</footer>


    <!--------------------------------- JAVASCRIPT -------------------------------------------->
    <script src="https://kit.fontawesome.com/cd8dd3426c.js" crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Sélectionner les messages de succès et d'erreur
        let alertMessage = document.querySelector(".alert-success, .alert-danger");
        if (alertMessage) {
            // Disparaît après 2 secondes (2000ms)
            setTimeout(function () {
                alertMessage.style.opacity = "0";
                setTimeout(function () {
                    alertMessage.style.display = "none";
                }, 500); // Attendre un peu plus pour le rendre invisible
            }, 5000);
        }

        // Pour enlever une citation avec animation
        document.querySelectorAll(".btn-danger").forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault(); // Empêcher le rechargement immédiat
                let card = this.closest(".quote-card");

                // Animation avant suppression
                card.style.transition = "opacity 0.5s, transform 0.5s";
                card.style.opacity = "0";
                card.style.transform = "scale(0.8)";

                // Attendre 500ms avant de la supprimer du DOM
                setTimeout(() => {
                    window.location.href = this.href; // Rediriger vers le fichier PHP
                }, 500);
            });
        });
    });
</script>


  </body>
</html>
