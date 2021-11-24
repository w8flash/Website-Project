<?php
    session_start();
    unset($_SESSION['personne']);
    header('Location: ../index.php');
?>