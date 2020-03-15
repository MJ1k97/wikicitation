<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
                        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>wiki citations</title>
        <link rel="stylesheet" type="text/css" href="page.css"/>
        <meta charset="UTF-8"/>
    </head>
    
    
    
    <body>
        <div class="bg">
        <div class="bg2">
        <?php
            include "header.xhtml";
        ?>   
        
        <h2 class="largebande">Nouvelles Citations</h2>
        <form method="get" action="admin.php" class="nvcitaAdmin">
            <table>
                <tr>
                    <td><textarea cols=50 rows=5 name="citation" required="required" placeholder="nouvelle citation"></textarea></td>
                </tr>
                <tr>
                    <td><input type="text" name="auteur" required="required" placeholder="nom de l'auteur"></td>
                </tr>
                <tr>
                    <td><textarea cols=50 rows= 5 maxlength="2000" name="bio" placeholder="biographie de l'auteur"></textarea></td>
                </tr>
                <tr>
                    <td><input type="text" name="siecle" placeholder="siecle de publication"></td>
                </tr>
                <tr>
                    <td><input type="text" name="theme" placeholder="theme principale abordé"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="ajouter">Ajouter</button>
                        <button type="reset" name="annuler">Annuler</button></td>
                </tr>
            </table>
        </form>
        
        <div class="listevalider">
            <h2>Valider les propositions</h2>
            <!--demander le nombre de ligne a la bd et ajouter le numero dans l'attribut name des bouttons-->
            <?php
                $conn=mysqli_connect("localhost", "root", "", "wikicitations"); 
                $i=0; 
                
                    $sql="SELECT * FROM citations WHERE statut=false";
                    $result=mysqli_query($conn, $sql);
                    $resultcheck = mysqli_num_rows($result);
                    if($resultcheck>0){
                        while($row=mysqli_fetch_assoc($result)){
                            $i=$i+1;
                            $GLOBALS["$i"]=$row['id_citation'];
                            echo "<div class='proposition'><p class='citationpro'>". $row['texte']."</p><p class='auteur'>". $row['nomauteur']."</p><hr/><p class='info'>Bio:".  $row['bioauteur']."</p><p class='info'>Siecle:".  $row['siecle']."</p><p class='info'>Theme".  $row['theme']."
                            <form method='get' action='admin.php'>
                                <button type='submit' name='ok".$i."'>OK</button>
                                <button type='submit' name='rejeter".$i."'>Rejeter</button>
                                <button type='submit' name='corriger".$i."'>Corriger</button>
                                </form>
                            </div>";
                        }
                        $i++;
                        $GLOBALS[0]=$i;
                    }else{
                        $GLOBALS[0]=$i;
                        echo "Plus rien a signaler";
                    }
            ?>
            
        </div>
        
        <?php
            include("footer.php");
        ?>
            </div>
            </div>
    </body>
</html>

        <?php
            $message="operation reussie.";
            $conn=mysqli_connect("localhost", "root", "", "wikicitations");         
            if(isset($_GET['ajouter'])){
            $auteur=addslashes($_GET['auteur']);
            $texte=addslashes($_GET['citation']);            
            $valider=true;
            $bio=addslashes($_GET['bio']);
            $siecle=addslashes($_GET['siecle']);
            $theme=addslashes($_GET['theme']);
            $sql = "INSERT INTO citations (texte, nomauteur,bioauteur, statut, siecle, theme) VALUES ('$texte', '$auteur', '$bio', '$valider', '$siecle', '$theme');";
            mysqli_query($conn,$sql);
            echo "<div class='popUp'>
                <span class='closebtn' onclick=\"this.parentElement.style.display='none';\">&times;", $message, "</span>         
                </div>";
        }
            
        ?>

        <?php
            $conn=mysqli_connect("localhost", "root", "", "wikicitations");
            $i=$GLOBALS["0"];
            for($k=1;$k<$i;$k++){
                $ok='ok'.$k;
                $rej='rejeter'.$k;
                $cor='corriger'.$k;
                $id=$GLOBALS["$k"];
                
                if(isset($_GET[$ok])){
                    $sql="UPDATE citations SET statut=true WHERE id_citation=$id;";
                    mysqli_query($conn, $sql);
                    header("location: admin.php");
                }else if(isset($_GET[$rej])){
                    $sql="DELETE FROM citations WHERE id_citation=$id;";
                    mysqli_query($conn, $sql);
                    header("location: admin.php");
                }else if(isset($_GET[$cor])){
                    $sql="SELECT * FROM citations WHERE id_citation=$id";
                    $result=mysqli_query($conn, $sql);
                    $resultcheck = mysqli_num_rows($result);
                    $row=mysqli_fetch_assoc($result);
            
                    $_SESSION['idnew']=$row['id_citation'];
                    echo $_SESSION['idnew'];
                    $texte=$row['texte'];
                    $auteur=$row['nomauteur'];
                    $theme=$row['theme'];
                    $siecle=$row['siecle'];
                    $bio=$row['bioauteur'];
                    $GLOBALS["0"]=$row['id_citation'];
                    
                    $message="<h3>Modifier la citation</h3>
                            <form action='modif.php' method='get'>
                                <input class='zonetexte' type='text' name='modcitation' required='required' placeholder='nouvelle citation' value='$texte'/><br/>
                                <input type='text' name='modauteur' required='required' placeholder='nom auteur' value='$auteur'/><br/>
                                <input type='texte' cols=50 rows= 5 name='modbio' placeholder='biographie auteur' value='$bio'><br/>
                                <input type='text' name='modsiecle' placeholder='siecle de publication' value='$siecle'/><br/>
                                <input type='text' name='modtheme' placeholder='theme principale abordé' value='$theme'/><br/>
                                <input type='submit' name='modvalider' value='Valider' class='searchSubmit'/>
                                <br/>
                            </form>";

                    echo "<div class='popUp'>
                            <span class='closebtn' onclick=\"this.parentElement.style.display='none';\">&times;</span><br/> $message
                        </div>";
                    
                }
    }  
        ?>