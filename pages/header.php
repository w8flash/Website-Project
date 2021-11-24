<header>
  <h1>Welcome !</h1>
    <nav>
      <a href="index.php?categorie=1">Home</a>
      <a href="index.php?categorie=2">About</a>
      <a href="index.php?categorie=3">Contact</a>

      <?php
        if (isset($_SESSION['personne'])) {
          echo '<a href="index.php?categorie=6">Profil</a>';
        } 

        if (!isset($_SESSION['personne'])) {
          echo '<a href="index.php?categorie=4">Sign in</a>';
          echo '<a href="index.php?categorie=5">Sign up</a>';
        } else echo '<a href="pages/unlog.php">Deconnexion</a>';

      ?>
    </nav>
</header>