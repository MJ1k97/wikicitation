<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
                        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>wiki citations</title>
        <link rel="stylesheet" type="text/css" href="wikiCSS.css"/>
        <link rel="stylesheet" type="text/css" href="page.css"/>
        <?php
            include "header.xhtml";
        ?>   
        <link rel="stylesheet" type="text/css" href="dicpage.css"/>
        <meta charset="UTF-8"/>
    </head>
    
    <body> 
        <div class="bg">
        <div class="bg2">
        <a name="backup"></a>
        <h2 class="largebande">Dictionnaire</h2>
            <?php
                $conn=mysqli_connect("localhost", "root", "", "wikicitations");   
                    $sql="SELECT * FROM citations WHERE statut=true ORDER BY id_citation DESC";
                    $result=mysqli_query($conn, $sql);
                    $resultcheck = mysqli_num_rows($result);
                    if($resultcheck>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo "<div class='citation'><p class='citationpro'>\"". $row['texte']."\"</p><p class='auteur'>". $row['nomauteur']."</p><hr/><p class='info'>Bio: ".  $row['bioauteur']."</p><p class='info'>Siecle:".  $row['siecle']."</p><p class='info'>Theme: ".  $row['theme']."</div>";
                        }
                    }
            ?>
    <?php
        include "footer.php";    
    ?>
    <a href="#backup">Remonter</a>
            </div>
            </div>
    </body>
</html>