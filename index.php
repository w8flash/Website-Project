<!-- PROJET PORTAL SCAN DEVELOPPÉ ET CRÉÉ PAR FARIA SAMUEL, LEBRETON ESTEBAN ET DANI ELIAS -->
<!-- LOGO BY DANI ELIAS -->
<!doctype html>
<html lang="fr-FR">

<head>
  <title>Index</title>
  <meta charset="UTF-8" />
  <meta name="author" content="flashh" />
  <meta name="description" content="Projet Website" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- IMPORTANT POUR LE RESPONSIVE -->
  <link rel="stylesheet" href="./ressource/css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600" />
</head>

<body class="align">
  <?php
        session_start();

        //include './pages/connexion.php';  
        //include './pages/header.php';
      ?>

<?php
                if (isset($_SESSION['personne'])) {
                    echo '<a href="">Connecté</a>';
                }

                if (!isset($_SESSION['personne'])) {
                  echo '<a href="">Pas Connecté</a>';
                } else echo '<a href="pagesphp/unlog.php">Deconnexion</a>';
            ?>
  <div class="grid">
  <form class="form login">
    <div class="form__field">
    <button><a href="./pages/connexion.php">Connexion</a></button>
    </div>

    <div class="form__field">
      <button><a href="./pages/inscription.php">Inscription</a></button>
    </div>
  </form>
  </div>
</body>
<!-- partial -->

</body>

</html>