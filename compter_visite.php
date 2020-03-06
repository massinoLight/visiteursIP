<?php
// Fonction qui permet de mettre à jour le compteur de visites

include("pdo.php");
function compter_visite(){
    // On va utiliser l'objet $pdo pour se connecter, il est créé en dehors de la fonction
    // donc on doit indiquer global $pdo; au début de la fonction
    global $pdo;

    // On prépare les données à insérer
    $ip_visiteur   = $_SERVER['REMOTE_ADDR']; // L'adresse IP du visiteur
    $date = date('Y-m-d-H-i');           // La date d'aujourd'hui, sous la forme AAAA-MM-JJ
    // Mise à jour de la base de données
    // 1. On initialise la requête préparée
    $sql= 'INSERT INTO connectes (ip , date_visite , pages_vues) VALUES (?,?, 1)
        ON DUPLICATE KEY UPDATE pages_vues = pages_vues + 1';
    $query = $pdo->prepare($sql);

$query->bindParam(1, $ip_visiteur);
$query->bindParam(2, $date);

$query->execute();

}

function Nombre_de_visiteurs_actuel(){
$sql="SELECT COUNT(ip) as Nombre_de_visiteurs_actuel FROM `connectes` WHERE date_visite BETWEEN DATE(NOW()) AND '2020-03-06 00:23:00'";
global $pdo;
$reponse = $pdo->query($sql);
$donnees = $reponse->fetch();

     $nb=$donnees['Nombre_de_visiteurs_actuel'];

$reponse->closeCursor();
return $nb;

}


compter_visite();

?>
