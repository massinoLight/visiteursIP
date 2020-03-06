<?php
// On indique au navigateur qu'on utilise l'encodage UTF-8
header('Content-type: text/html; charset=utf-8');
 
// Paramètres de connexion à la base
define('DB_HOST' , 'localhost');
define('DB_NAME' , 'visiteurs');
define('DB_USER' , 'root');
define('DB_PASS' , '');
 
// Connexion à la base avec PDO
try{
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch(Exception $e) {
    echo "Impossible de se connecter à la base de données '".DB_NAME."' sur ".DB_HOST." avec le compte utilisateur '".DB_USER."'";
    echo "<br/>Erreur PDO : <i>".$e->getMessage()."</i>";
    die();
}
?>
