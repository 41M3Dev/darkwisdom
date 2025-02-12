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
    <!---------------------------------  Section Titre  -------------------------------------------->

<section class="citation-section">
    <div class="overlay">
        <h1 style="padding-top: 80px">Découvrez des citations inspirantes</h1>
        <p>Plongez dans un monde de pensées profondes, avec des citations sur l’amour, la sagesse, la motivation et bien plus encore.</p>
    </div>
    <video class="background-media" autoplay muted loop playsinline>
        <source src="../images/title_citation.mp4" type="video/mp4">
        Votre navigateur ne supporte pas les vidéos.
    </video>
    <img src="../images/fond_citations.jpg" alt="Image de fond" class="background-media mobile-only">
</section>
<!---------------------------------  Section Anime  -------------------------------------------->
<section class="anime-section">
        <h2>✨ Citations Inspirantes d'Anime ✨</h2>
        <div class="container">
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card anime-card p-3">
                        <h5 class="card-title">Naruto Uzumaki</h5>
                        <p class="card-text">"Échouer, c'est la preuve qu'on a essayé."</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card anime-card p-3">
                        <h5 class="card-title">Luffy</h5>
                        <p class="card-text">"Je ne veux pas conquérir quoi que ce soit, je veux être libre."</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card anime-card p-3">
                        <h5 class="card-title">Goku</h5>
                        <p class="card-text">"Le pouvoir vient en réponse à un besoin, pas à un désir."</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-4">
                    <div class="card anime-card p-3">
                        <h5 class="card-title">Levi Ackerman</h5>
                        <p class="card-text">"Les décisions, bonnes ou mauvaises, ne sont jamais simples à prendre."</p>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-4">
                    <div class="card anime-card p-3">
                        <h5 class="card-title">Itachi Uchiha</h5>
                        <p class="card-text">"La vie n’a de valeur que si elle est vécue pour quelqu’un d’autre."</p>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-4">
                    <div class="card anime-card p-3">
                        <h5 class="card-title">Edward Elric</h5>
                        <p class="card-text">"Un cœur brisé peut toujours se réparer tant qu'il bat encore."</p>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col-md-4">
                    <div class="card anime-card p-3">
                        <h5 class="card-title">Gojo Satoru</h5>
                        <p class="card-text">"Ne crains pas l’échec, mais crains de ne pas essayer."</p>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="col-md-4">
                    <div class="card anime-card p-3">
                        <h5 class="card-title">Kakashi Hatake</h5>
                        <p class="card-text">"Ceux qui enfreignent les règles sont des déchets... Mais ceux qui abandonnent leurs amis sont pires."</p>
                    </div>
                </div>
                <!-- Card 9 -->
                <div class="col-md-4">
                    <div class="card anime-card p-3">
                        <h5 class="card-title">Shoto Todoroki</h5>
                        <p class="card-text">"Ne laisse pas le passé décider de ton avenir."</p>
                    </div>
                </div>
            </div>

            <!-- Carte centrale avec bouton -->
            <div class="quote-card mt-4">
                <h4>🌀 Générer une Citation d'Anime</h4>
                <p class="generated-quote">Cliquez sur le bouton pour découvrir une nouvelle citation !</p>
                <button class="generate-btn">🎲 Nouvelle Citation</button>
            </div>
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
