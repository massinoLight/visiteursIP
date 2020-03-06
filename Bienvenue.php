<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>

    </head>
 
    <body>
 
   
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Mon  site</h1>
        
        <p>
            Bienvenue sur le  site !<br />
            Vous allez adorer ici, c'est un site génial qui va recupérer votre adresse ip<br />

            le nombre de visiteurs actuel est <?php include("appelle.php"); 
                                                     global $Nombre_de_visiteurs;
                                                       echo $Nombre_de_visiteurs;
                                                      ?>
         </p>
    </div>
    
    
    </body>
</html>
