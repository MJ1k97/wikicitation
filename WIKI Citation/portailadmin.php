 <?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
                        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>wiki citations</title>
        <link rel="stylesheet" type="text/css" href="page.css"/>
        <?php 
            include "header.xhtml";
        ?>
         <link rel="stylesheet" type="text/css" href="homepage.css"/>
        <meta charset="UTF-8"/>
    </head>
    
    
<body>
    <div class="bg">
        <div class="bg2">
     <H2 class="largebande">Portail Administrateur</H2>
    <div class="adminSign">
        <form action="home.php" method="post"> 

            <p>ce portail est reservé aux administrateurs</p>
                <input type="text" name="identifiant" placeholder="Identifiant"/><br/>
                <input type="password" name="pwd" placeholder="Mot de passe"/>
                <p>
                    <button type="submit" name="signin">Acceder</button>
                </p>
            </form>
        </div>
     <?php
        include("footer.php");    
    ?> 
        </div>
        </div>
    </body>
    </html>