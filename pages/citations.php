<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="../styles/citations.css" />
  </head>
  <body>
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
            <li class="nav-item"><a class="nav-link" href="#">Inscription</a></li>
            <li class="nav-item"><a class="nav-link sp" href="#">Connexion</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="#">Favoris</a></li> -->
            <!-- <li class="nav-item ms-3">
              <a class="nav-link" href="#"><i class="fa-regular fa-user"></i></a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!--------------------------------- FIN NAVBAR -------------------------------------------->
    <!---------------------------------  Section anime -------------------------------------------->
    <section class="anime-citations">
  <h2>✨ Citations mémorables d'Anime ✨</h2>
  <div class="citation-list">
    <div class="citation">
      <p>"Le monde n'est pas parfait. Mais il essaie de l'être, c'est ce qui le rend beau."</p>
      <span>- Roy Mustang, Fullmetal Alchemist: Brotherhood</span>
    </div>
    <div class="citation">
      <p>"La peur n'est pas mauvaise. Elle te dit où sont tes faiblesses. Et une fois que tu connais tes faiblesses, tu peux devenir plus fort et plus gentil."</p>
      <span>- Gildarts Clive, Fairy Tail</span>
    </div>
    <div class="citation">
      <p>"Pouvoir pleurer, c'est pas une faiblesse. Ça veut juste dire que tu ressens quelque chose."</p>
      <span>- Edward Elric, Fullmetal Alchemist: Brotherhood</span>
    </div>
  </div>
  
  <!-- Encadré pour la citation aléatoire -->
  <div class="random-citation-box">
    <p id="random-citation">Clique sur le bouton pour découvrir une citation en rapport avec les animés !</p>
    <button onclick="generateRandomCitation()">Nouvelle citation</button>
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
  </body>
</html>
