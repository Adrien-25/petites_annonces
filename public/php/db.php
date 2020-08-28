<?php

/***En local */
/*Nom de la base de donnée*/
define('DATABASE', 'annonces');
/*Identifiant de la base de donnée*/ 
define('USER', 'root');
/*Mot de passe de la base de donnée*/ 
define('PWD', '');
/*Hôte de la base de donnée */
define('HOST','localhost');


/*Connexion à la base de donnée*/
try {
    // En local
    $dbh = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    // En prod
    // $dbh = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
