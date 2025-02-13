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
    <?php include '../function/dashboardBack.php'?>
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
            <li class="nav-item"><a class="nav-link" href="citations.php">Citations</a></li>
            <a class="nav-link" href="pages/profil.php"><i class="fa-regular fa-user"></i></a>
            <a class="nav-link sp" href="pages/profil.php" label="déconnexion"><i class="bi bi-box-arrow-right"></i></a>
            <!-- <li class="nav-item"><a class="nav-link" href="#">Favoris</a></li> -->
            <!-- <li class="nav-item ms-3">
              <a class="nav-link" href="#"><i class="fa-regular fa-user"></i></a>
            </li> -->
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
                    <form id="profileForm">
                        <div class="mb-3">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" value="Dupont" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="prenom" value="Jean"  >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pseudo</label>
                            <input type="text" class="form-control" id="pseudo" value="JeanD"  >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="jean.dupont@email.com"  >
                        </div>
                        <button type="submit" id="saveBtn" class="btn btn-light w-100 mt-2">Enregistrer</button >
                    </form>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="form-citation-container">
            <div class="form-citation-card">
                <h2 class="form-citation-title">Ajouter une Citation</h2>

                <!-- Message de confirmation -->
                <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                    <div class="success-message" style="color:green; font-weight: bold; margin-bottom:10px;">Citation ajoutée avec succès !</div>
                <?php endif; ?>

                <!-- Formulaire d'ajout -->
                <form action="ajouter_citation.php" method="POST">
                    <!-- Citation -->
                    <div class="form-group">
                        <label for="citation" class="form-label">Citation :</label>
                        <textarea class="form-input" id="citation" name="citation" rows="4" required></textarea>
                    </div>

                    <!-- Auteur -->
                    <div class="form-group">
                        <label for="auteur" class="form-label">Auteur :</label>
                        <input type="text" class="form-input" id="auteur" name="auteur" required>
                    </div>

                    <!-- Source (optionnelle) -->
                    <div class="form-group">
                        <label for="source" class="form-label">Source (optionnelle) :</label>
                        <input type="text" class="form-input" id="source" name="source">
                    </div>

                    <!-- Thème -->
                    <div class="form-group">
                        <label for="theme" class="form-label">Thème :</label>
                        <select class="form-input" id="theme" name="theme" required>
                            <option value="film">Film</option>
                            <option value="anime">Anime</option>
                            <option value="poesie">Poésie</option>
                        </select>
                    </div>

                    <!-- Champ caché pour l'ID utilisateur -->
                    <input type="hidden" name="utilisateurs_id" value="<?php echo $_SESSION['user_id'] ?? ''; ?>">

                    <!-- Bouton d'envoi -->
                    <button type="submit" class="form-submit-btn">Ajouter</button>
                </form>
            </div>
        </div>
    </div>


        <!-- Section suppression -->
<div id="favoris" class="container mt-5 contfav">
    <h2 class="text-center mb-4">Supprimer des Citations</h2>

    <!-- Films -->
    <?php foreach ($citations as $theme => $quotes): ?> <!-- Correction ici -->
    <div class="theme-section">
    <div id="message" style="display: none; color: green; text-align: center;"></div>
        <h3>🎬 <?= htmlspecialchars($theme) ?></h3>
        <div class="quote-grid">
        <?php foreach ($quotes as $quote): ?>
            <div class="quote-card">
                <p><?= htmlspecialchars($quote['citation']) ?></p>
                <small>- <?= htmlspecialchars($quote['auteur']) ?> <?= $quote['source'] ? ', ' . htmlspecialchars($quote['source']) : '' ?></small>
                <br>
                <button class="btn btn-danger remove-btn" data-id="<?= $quote['id'] ?>">Retirer</button>

            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>

</section>
    


    <!---------------------------------  FOOTERRR -------------------------------------------->

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
    document.querySelectorAll(".remove-btn").forEach(button => {
        button.addEventListener("click", function () {
            const citationId = this.getAttribute("data-id");

            if (!citationId) return;

            // if (confirm("Voulez-vous vraiment supprimer cette citation ?")) {
            //     fetch("../function/supprimer_citation.php?id=" + citationId, { method: "GET" })
            //         .then(() => {
            //             location.reload(); // Recharge la page après suppression
            //         })
            //         .catch(error => console.error("Erreur :", error));
            // }
            fetch("../function/supprimer_citation.php?id=" + citationId, { method: "GET" })
                .then(() => {
                    location.reload(); // Recharge la page après suppression
                })
                .catch(error => console.error("Erreur :", error));
        });
    });
});

</script>



  </body>
</html>
