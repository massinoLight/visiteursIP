    <?php
    include("pdo.php");
function Nombre_de_visiteurs_actuel(){
$sql='SELECT COUNT(ip) as Nombre_de_visiteurs_actuel FROM `connectes` WHERE date_visite=DATE( NOW() )';
global $pdo;
$reponse = $pdo->query($sql);
$donnees = $reponse->fetch();

     $nb=$donnees['Nombre_de_visiteurs_actuel'];

$reponse->closeCursor();
return $nb;

}
    ?>
