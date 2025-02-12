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
  <body class="body_profil">
    <!--------------------------------- DEBUT NAVBAR -------------------------------------------->
    <nav
      class="navbar fixed-top navbar-expand-lg bg-body-tertiary bg-dark"
      data-bs-theme="dark"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.html">Dark Wisdom</a>
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
            <li class="nav-item"><a class="nav-link" href="#">Mes Favoris</a></li>
            <li class="nav-item"><a class="nav-link sp" href="#">Deconnexion</a></li>
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

    <div class="container cont-profil">
    <!-- Section Profil -->
    <div class="row">
        <div class="col-md-6 mx-auto" >
            <div class="profile-card p-4">
                <h3 class="text-center">Profil</h3>
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
                    <button type="submit" id="saveBtn" class="btn btn-purple w-100 mt-2">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Section Favoris -->
    <div class="container mt-5">
    <div class="favorites-card p-4">
        <h3 class="text-center">📜 Citations Favoris</h3>

        <div class="favorite-container">
            <div class="favorite-scroll">

                <div class="favorite-card">
                    <p>« L’espoir est une chose dangereuse. L’espoir peut rendre un homme fou. »</p>
                    <small>- Stephen King, *Les Évadés (1994)*</small>
                    <button class="btn btn-danger remove-btn">🛒 Retirer</button>
                </div>

                <div class="favorite-card">
                    <p>« Ce ne sont pas nos aptitudes qui montrent ce que nous sommes. Ce sont nos choix. »</p>
                    <small>- J.K. Rowling, *Harry Potter et la Chambre des Secrets (2002)*</small>
                    <button class="btn btn-danger remove-btn">🛒 Retirer</button>
                </div>

                <div class="favorite-card">
                    <p>« Ne pleurez pas parce que c’est fini. Souriez parce que c’est arrivé. »</p>
                    <small>- Dr. Seuss</small>
                    <button class="btn btn-danger remove-btn">🛒 Retirer</button>
                </div>

                <div class="favorite-card">
                    <p>« La peur mène à la colère, la colère mène à la haine, la haine mène à la souffrance. »</p>
                    <small>- Yoda, *Star Wars*</small>
                    <button class="btn btn-danger remove-btn">🛒 Retirer</button>
                </div>

                <div class="favorite-card">
                    <p>« Hakuna Matata, ça veut dire pas de soucis. »</p>
                    <small>- Le Roi Lion</small>
                    <button class="btn btn-danger remove-btn">🛒 Retirer</button>
                </div>

            </div>
        </div>
    </div>
</div>
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
