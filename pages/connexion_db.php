<?php
    $host= "localhost";
    $login= "root";
    $mdp= "";
    $db= "flashh";
    try {
        $pdo=new PDO("mysql:host=$host;dbname=$db","$login","$mdp");
        $pdo->exec('SET NAMES utf8');
    }catch (PDOException $e) {
        print "Erreur !:" .$e->getMessage() ."<br/>";
        die();
    }
?>