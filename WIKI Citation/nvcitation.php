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
         <link rel="stylesheet" type="text/css" href="citpage.css"/>
        <meta charset="UTF-8"/>
    </head>
    
    <?php 
        $message="Merci de votre contribution. Votre citation sera evaluée et validée dans moins de 24h.";
        
        if(isset($_GET['proposer'])){
            $conn=mysqli_connect("localhost", "root", "", "wikicitations");         
            $auteur=addslashes($_GET['auteur']);
            $texte=addslashes($_GET['citation']);            
            $valider=false;
            $bio=addslashes($_GET['bio']);
            $siecle=addslashes($_GET['siecle']);
            $theme=addslashes($_GET['theme']);
            $sql="INSERT INTO citations (texte, nomauteur,bioauteur, statut, siecle, theme) VALUES ('$texte', '$auteur', '$bio', '$valider', '$siecle', '$theme');";
            mysqli_query($conn,$sql);
            echo "<div class='popUp'>
                <span class='closebtn' onclick=\"this.parentElement.style.display='none';\">&times;", $message, "</span>         
                </div>";
        }      
       
    ?>
    
    <body>
        <div class="bg">
        <div class="bg2">
        <h2 class="largebande">Proposer une Nouvelle Citation</h2>
        
                <form method="get" action="nvcitation.php" class="nvcitaAdmin">
            <table>
                <tr>
                    <td><textarea cols=50 rows=5 name="citation" required="required" placeholder="nouvelle citation"></textarea></td>
                </tr>
                <tr>
                    <td><input type="text" name="auteur" required="required" placeholder="nom de l'auteur"></td>
                </tr>
                <tr>
                    <td><textarea cols=50 rows= 5 maxlength="2000" name="bio" placeholder="biographie de l'auteur" class="zonebiography"></textarea></td>
                </tr>
                <tr>
                    <td><input type="text" name="siecle" placeholder="siecle de publication"></td>
                </tr>
                <tr>
                    <td><input type="text" name="theme" placeholder="theme principale abordé"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="proposer">Proposer</button>
                        <button type="reset" name="annuler">Annuler</button></td>
                </tr>
            </table>
        </form>
        
            
        <div class="notevisite">
            <span class='closebtn' onclick="this.parentElement.style.display='none';">&times;</span><br/>
            <h2>Note au visiteur</h2>
            <p>ne seront pas prise en compte:</p>
            -les fausses citations avec faux auteurs<br/>
            -les charabia<br/>
            -toute citation non francaise ou ne traitant d'aucun sujet de litterature francaise<br/>
    </div>
        
        
    
        <?php
            include("footer.php");
        ?>
            </div>
            </div>
    </body>
</html>