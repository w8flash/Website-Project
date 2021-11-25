<!doctype html>
<html lang="fr-FR">

<head>
  <title>Index</title>
  <meta charset="UTF-8" />
  <meta name="author" content="flashh" />
  <meta name="description" content="Projet Website" />
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- IMPORTANT POUR LE RESPONSIVE -->
  <link rel="stylesheet" href="ressource/css/index.css" />
  <link rel="stylesheet" href="ressource/css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600" />
</head>

<body>
  <?php
    session_start();

    include 'pages/connexion_db.php';  
    include 'pages/header.php';

    if (!isset($_GET['categorie']) )
    {
        $_GET['categorie']=1;
    }
    switch ($_GET['categorie'])
    {
        default : include 'pages/accueil.php';
        break;

        case 1 : include 'pages/accueil.php';
        break;
    
        case 2 : include 'pages/about.php';
        break;

        case 3 : include 'pages/contact.php';
        break;

        case 4 : include 'pages/connexion.php';
        break;

        case 5 : include 'pages/inscription.php';
        break;

        case 6 : include 'pages/profil.php';
        break;

    }
  ?>
</body>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="./ressource/js/script.js"></script>
</html>