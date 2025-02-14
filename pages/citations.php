<?php
    global$pdo;
    include '../function/function.php';
?>
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
    <link rel="stylesheet" href="../styles/citations.css" />
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
             <?php
             // Démarrer la session si ce n'est pas déjà fait
             if (session_status() === PHP_SESSION_NONE) {
                 session_start();
             }
             // Vérifier si l'utilisateur est connecté
              if (isset($_SESSION['user_id'])) {
              // Si l'utilisateur est connecté
              echo '<li class="nav-item"><a class="nav-link" href="profil.php">Favoris</a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php">Déconnexion</a></li>
              <li class="nav-item ms-3">
                  <a class="nav-link" href="profil.php"><i class="fa-regular fa-user"></i></a>
              </li>';
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
    <section class="citation-section">
    <div class="overlay">
        <h1 class="h1_citations" style="padding-top: 80px">Découvrez des citations inspirantes</h1>
        <p class="p_citations">Plongez dans un monde de pensées profondes, avec des citations sur les animés, les  et bien plus encore.</p>
    </div>
    <video class="background-media" autoplay muted loop playsinline>
        <source src="../images/title_citation.mp4" type="video/mp4">
        Votre navigateur ne supporte pas les vidéos.
    </video>
    <img src="../images/fond_citations.jpg" alt="Image de fond" class="background-media mobile-only">
</section>
    <!---------------------------------  Section Anime  -------------------------------------------->
    <section class="anime-section">
        <h2 class="h2citations"> Citations Inspirantes d'Anime 🎌</h2>
        <div class="container">
            <div class="row g-4">
                <!-- Card 1 -->

                <?php
                $sql_type = citation('anime');
                $sql_type = $pdo->prepare($sql_type);
                $sql_type->execute();
                $rows = $sql_type->fetchAll();
                foreach ($rows as $row) {
                    ?>
                        <div class="col-md-4">
                            <div class="card anime-card">
                                <button class="favorite-btn" data-id="<?=$row['id']?>" onclick="toggleFavorite(<?=$row['id']?>)"><i class="fas fa-heart"></i></button>
                                <h5 class="card-title"><?=$row['source']?></h5>
                                <div class="card-content">
                                    <p class="p_citations"><?=$row['citation']?></p>
                                </div>
                                <small>- <?=$row['auteur']?></small>
                            </div>
                        </div>
                    <?php
                }
                ?>
            <!-- Carte centrale avec bouton -->
            <div class="quote-card mt-4">
                <h4 style="font-family:Bebas Neue, sans-serif; font-size:2rem;">🎌 Générer une Citation d'Anime</h4><br>
                <h5 class="card-title titleanime" style="padding-bottom:20px">Goku</h5>
                    <div class="card-content">
                        <p class="p_citations quoteanime">"Ce n’est pas la puissance qui compte, mais la volonté de ne jamais abandonner."</p>
                    </div>
                    <small class="sourceanime">- Dragon Ball Z</small> <br><br>
                <button class="generate-btn btn-anime">🎲 Nouvelle Citation</button>
            </div>
        </div>
    </section>
    <!---------------------------------  FIN SECTION ANIME -------------------------------------------->
    <!---------------------------------  SECTION PARALLAX -------------------------------------------->
    <div class="parallax1"></div>
    <!---------------------------------  Fin PARALLAX -------------------------------------------->
    <!---------------------------------  SECTION FILM -------------------------------------------->
    <section class="anime-section">
        <h2 class="h2citations">Citations de Film 📜</h2>
        <div class="container">
            <div class="row g-4">
                <!-- Card 1 -->
                <?php
                $sql_type = citation('film');
                $sql_type = $pdo->prepare($sql_type);
                $sql_type->execute();
                $rows = $sql_type->fetchAll();
                foreach ($rows as $row) {
                    ?>
                    <div class="col-md-4">
                        <div class="card anime-card">
                            <button class="favorite-btn" data-id="<?=$row['id']?>" onclick="toggleFavorite(<?=$row['id']?>)"><i class="fas fa-heart"></i></button>
                            <h5 class="card-title"><?=$row['source']?></h5>
                            <div class="card-content">
                                <p class="p_citations"><?=$row['citation']?></p>
                            </div>
                            <small>- <?=$row['auteur']?></small>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="quote-card mt-4">
                    <h4 >📜 Générer une Citation de Poesie</h4><br>
                    <h5 class="card-title titlePoesie" style="padding-bottom:20px">  Victor Hugo </h5>
                    <div class="card-content">
                        <p class="p_citations quotepoesie">"Demain, dès l’aube, à l’heure où blanchit la campagne, Je partirai."</p>
                    </div>
                    <small class="sourcePoesie">- Demain, dès l’aube</small> <br><br>
                    <button class="generate-btn btn-poesie">🎲 Nouvelle Citation</button>
                </div>
            </div>
    </section>
    <!---------------------------------  FIN SECTION FILM -------------------------------------------->
    <!---------------------------------  SECTION PARALLAX -------------------------------------------->
    <div class="parallax1"></div>
    <!---------------------------------  Fin PARALLAX -------------------------------------------->
    <!---------------------------------  SECTION POESIE -------------------------------------------->
    <section class="anime-section">
        <h2 class="h2citations">Citations de Poésies 📜</h2>
        <div class="container">
            <div class="row g-4">
                <!-- Card 1 -->
                <!-- Card 1 -->

                <?php
                $sql_type = citation('poesie');
                $sql_type = $pdo->prepare($sql_type);
                $sql_type->execute();
                $rows = $sql_type->fetchAll();
                foreach ($rows as $row) {
                    ?>
                    <div class="col-md-4">
                        <div class="card anime-card">
                            <button class="favorite-btn" data-id="<?=$row['id']?>" onclick="toggleFavorite(<?=$row['id']?>)"><i class="fas fa-heart"></i></button>
                            <h5 class="card-title"><?=$row['source']?></h5>
                            <div class="card-content">
                                <p class="p_citations"><?=$row['citation']?></p>
                            </div>
                            <small>- <?=$row['auteur']?></small>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="quote-card mt-4">
                <h4 >📜 Générer une Citation de Poesie</h4><br>
                <h5 class="card-title titlePoesie" style="padding-bottom:20px">  Victor Hugo </h5>
                    <div class="card-content">
                        <p class="p_citations quotepoesie">"Demain, dès l’aube, à l’heure où blanchit la campagne, Je partirai."</p>
                    </div>
                    <small class="sourcePoesie">- Demain, dès l’aube</small> <br><br>
                <button class="generate-btn btn-poesie">🎲 Nouvelle Citation</button>
            </div>
        </div>
    </section>
    <!---------------------------------  FIN SECTION POESIE -------------------------------------------->
    <!---------------------------------  Parallax -------------------------------------------->
    <div class="parallax1"></div>
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
        function toggleFavorite(citationId) {
            console.log('ok')
            let button = document.querySelector(`button[data-id='${citationId}']`);
            fetch('add_favorite.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `citation_id=${citationId}`
            })
                .then(response => response.text()) // Affiche le texte brut avant de le convertir en JSON
                .then(text => {
                    console.log("Réponse brute du serveur :", text);
                    return JSON.parse(text);
                })
                .then(data => {
                    if (data.status === "success") {
                        button.classList.toggle("active");
                    } else {
                        alert("Erreur lors de l'ajout aux favoris.");
                    }
                })
                .catch(error => console.error('Erreur:', error));
        }
    </script>
    <script src="../script/test.js"></script>
  </body>
</html>