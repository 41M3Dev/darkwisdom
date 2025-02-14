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
            <li class="nav-item"><a class="nav-link" href="#favoris">Mes Favoris</a></li>
            <li class="nav-item"><a class="nav-link sp" href="#">Déconnexion</a></li>
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

        <!-- Section Favoris -->
        <div id="favoris" class="container mt-5 contfav"  >
        <h2 class="text-center mb-4">⭐ Citations Favorites</h2>

        <!-- Films -->
        <div class="theme-section">
            <h3>🎬 Films</h3>
            <div class="quote-grid">
                <div class="quote-card">
                    <p>« L’espoir est une chose dangereuse. L’espoir peut rendre un homme fou. »</p>
                    <small>- Stephen King, *Les Évadés (1994)*</small>
                    <br>
                    <button class="btn btn-danger remove-btn">Retirer</button>
                </div>

                <div class="quote-card">
                    <p>« Ce ne sont pas nos aptitudes qui montrent ce que nous sommes. Ce sont nos choix. »</p>
                    <small>- J.K. Rowling, *Harry Potter et la Chambre des Secrets (2002)*</small>
                    <br>
                    <button class="btn btn-danger remove-btn"> Retirer</button>
                </div>
                <div class="quote-card">
                    <p>« Ce ne sont pas nos aptitudes qui montrent ce que nous sommes. Ce sont nos choix. »</p>
                    <small>- J.K. Rowling, *Harry Potter et la Chambre des Secrets (2002)*</small>
                    <br>
                    <button class="btn btn-danger remove-btn"> Retirer</button>
                </div>
                <div class="quote-card">
                    <p>« L’espoir est une chose dangereuse. L’espoir peut rendre un homme fou. »</p>
                    <small>- Stephen King, *Les Évadés (1994)*</small>
                    <br>
                    <button class="btn btn-danger remove-btn">Retirer</button>
                </div>

                <div class="quote-card">
                    <p>« Ce ne sont pas nos aptitudes qui montrent ce que nous sommes. Ce sont nos choix. »</p>
                    <small>- J.K. Rowling, *Harry Potter et la Chambre des Secrets (2002)*</small>
                    <br>
                    <button class="btn btn-danger remove-btn"> Retirer</button>
                </div>
                <div class="quote-card">
                    <p>« Ce ne sont pas nos aptitudes qui montrent ce que nous sommes. Ce sont nos choix. »</p>
                    <small>- J.K. Rowling, *Harry Potter et la Chambre des Secrets (2002)*</small>
                    <br>
                    <button class="btn btn-danger remove-btn"> Retirer</button>
                </div>
            </div>
        </div>

        <!-- Anime -->
        <div class="theme-section">
            <h3>🎌 Anime</h3>
            <div class="quote-grid">
                <div class="quote-card">
                    <p>« La douleur est éphémère, l’abandon est éternel. »</p>
                    <small>- One Piece, *Monkey D. Luffy*</small>
                    <br>
                    <button class="btn btn-danger remove-btn"> Retirer</button>
                </div>

                <div class="quote-card">
                    <p>« La peur n’est pas le mal. Elle te dit juste quelle est ta véritable faiblesse. »</p>
                    <small>- Fullmetal Alchemist, *Edward Elric*</small>
                    <br>
                    <button class="btn btn-danger remove-btn"> Retirer</button>
                </div>
            </div>
        </div>

        <!-- Poésie -->
        <div class="theme-section">
            <h3>📖 Poésie</h3>
            <div class="quote-grid">
                <div class="quote-card">
                    <p>« Je suis d’un pays qui fut envahi sept fois, mais où une femme seule peut sortir la nuit. »</p>
                    <small>- Mahmoud Darwish</small>
                    <br>
                    <button class="btn btn-danger remove-btn"> Retirer</button>
                </div>

                <div class="quote-card">
                    <p>« Ce que tu cherches te cherche. »</p>
                    <small>- Rumi</small>
                    <br>
                    <button class="btn btn-danger remove-btn"> Retirer</button>
                </div>
            </div>
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
    <script>document.addEventListener("DOMContentLoaded", function () {
    const favoriteButtons = document.querySelectorAll(".favorite-btn");

    favoriteButtons.forEach(button => {
        button.addEventListener("click", function () {
            this.classList.toggle("active");
        });
    });
});


// pour enlever une CITATION
document.querySelectorAll(".remove-btn").forEach(button => {
    button.addEventListener("click", function() {
        this.parentElement.remove(); // Supprime la carte parente
    });
});
</script>
  </body>
</html>
