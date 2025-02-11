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
    <link rel="stylesheet" href="styles/style_index.css" />
  </head>
  <body>
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
    <!---------------------------------  HERO SECTION -------------------------------------------->

    <div class="hero">
      <div class="hero-content"> 
        <h1>Un univers de citations à découvrir</h1>
        <p>
          Bienvenue sur Dark Wisdom, une collection de citations inspirantes
          tirées de divers univers. Films, séries, animés, littérature,
          philosophie… découvre des mots qui marquent et explore différentes
          thématiques pour trouver l’inspiration.
        </p>
        <button class="btn btn-lg">Explorez les citations</button>
      </div>
    </div>
    <!--------------------------------- FIN HERO SECTION -------------------------------------------->
    <!---------------------------------  Transition SECTION -------------------------------------------->
    <div class="container citations mt-5" data-aos="fade-up" delay= "2000" duration= "1000"> 
        <h2>Nos citations par thème</h2>
        <br><br><br>
        <div id="carouselCitations" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <h3 style="color:white">Citations Cinema &nbsp;&nbsp;<i class="bi bi-film"></i></h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                <p class="card-text">"La peur mène à la colère, la colère mène à la haine, la haine mène à la souffrance." </p>
                                <p class="card-author">— <strong>Maître Yoda</strong>,<i> Star Wars</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                <p class="card-text">"Pourquoi tombons-nous ? Pour mieux apprendre à nous relever." </p>
                                <p class="card-author">— <strong>Alfred Pennyworth</strong>, <i> Batman Begins</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                <p class="card-text"> "Ce n’est pas nos aptitudes qui montrent ce que nous sommes, ce sont nos choix."</p>
                                <p class="card-author">— <strong>Dumbledore</strong>, <i> Harry Potter</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <h3 style="color:white">Citations Anime</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                <p class="card-text"> "Un héros n'est pas celui qui ne tombe jamais. C'est celui qui se relève toujours."</p>
                                <p class="card-author">— <strong>All Might</strong>, <i> My Hero Academia</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                <p class="card-text"> "La douleur est inévitable. La souffrance est optionnelle."</p>
                                <p class="card-author">— <strong>Nagato (Pain)</strong>, <i> Naruto Shippuden</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card custom-card">
                                <div class="card-body">
                                <p class="card-text"> "Un pouvoir qui ne peut protéger ses amis n'est rien d'autre qu'une faiblesse."</p>
                                <p class="card-author">— <strong>Erza Scarlet</strong>, <i> Fairy Tail</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Boutons de navigation -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCitations" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCitations" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <br><br>
        <div class="text-center">
        <button type="button" class="btn btn-light bouton2">Decouvrez ici plus de citations</button>
        </div>
    </div>
    <div class="parallax">

    </div>


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
