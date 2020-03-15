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
        <h2 class="largebande">1000 Citations litteraires pour vous inspirer</h2>
        
            <?php
    if(isset($_GET['fetch'])) {
 $conn=mysqli_connect("localhost", "root", "", "wikicitations"); 
    $i=0; 
        $val=$_GET['fetch'];

        $sql="SELECT * FROM citations WHERE nomauteur LIKE '%$val%' LIMIT 10";
        $result=mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck>0){
            echo "<h2>Vos resultats</h2>";
            while($row=mysqli_fetch_assoc($result)){
                $i=$i+1;
                $GLOBALS["$i"]=$row['id_citation'];
                echo "<div class='citation'><p class='citationpro'>". $row['texte']."</p><p class='auteur'>". $row['nomauteur']."</p><hr/><p class='info'>Bio:".  $row['bioauteur']."</p><p class='info'>Siecle:".  $row['siecle']."</p><p class='info'>Theme".  $row['theme']."
                </div>";
            }
            $i++;
            $GLOBALS[0]=$i;
        }else{
            $GLOBALS[0]=$i;
            echo "aucun resultat";
        }
        echo "<hr/>";
    }
    ?>
            
            
        <?php
            $i=rand(1,35);
            $GLOBALS['index']=$i;
            $index=$GLOBALS['index'];
            $conn=mysqli_connect("localhost", "root", "", "wikicitations");   
            $sql="SELECT * FROM citations WHERE id_citation=$index";
            $result=mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<div class='citation'><p class='citationpro'>". $row['texte']."</p><p class='auteur'>". $row['nomauteur']."</p><hr/><p class='info'>Bio:".  $row['bioauteur']."</p><p class='info'>Siecle:".  $row['siecle']."</p><p class='info'>Theme".  $row['theme']."</div>";
                }
            }
        ?>
    
    <?php
        include("footer.php");    
    ?>
        </div>
        </div>
    </body>
</html>

<?php 
    $conn=mysqli_connect("localhost", "root", "", "wikicitations"); 
    if(isset($_POST['signin'])){
        $username=mysqli_real_escape_string($conn, $_POST['identifiant']);
        $passwd=mysqli_real_escape_string($conn, $_POST['pwd']);

        if ($username!="" && $passwd!=""){
            $sql="SELECT id FROM account WHERE login='$username' and passwd='$passwd'";
            $result=mysqli_query($conn, $sql);
            $row=mysqli_fetch_assoc($result);
            $count=mysqli_num_rows($result);
            if($count==1){
                header("location:admin.php");
            }else{
                header("location:nvcitation.php");
            }
        }
    }
?>