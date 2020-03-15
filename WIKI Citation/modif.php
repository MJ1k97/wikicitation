<?php
    $conn=mysqli_connect("localhost", "root", "", "wikicitations");
    $idnew= $_SESSION['idnew'];
    echo $idnew;
    if (isset($_GET['modvalider'])){
        
        $idnew=$_SESSION['idnew'];
        $texte=addslashes($_GET['modcitation']);
        $auteur=addslashes($_GET['modauteur']);
        $theme=addslashes($_GET['modtheme']);
        $siecle=addslashes($_GET['modsiecle']);
        $bio=addslashes($_GET['modbio']);
        
        $sql="UPDATE citations SET texte=$texte, nomauteur=$auteur, bioauteur=$bio, siecle=$siecle, theme=$theme WHERE id_citation=$idnew;";
        mysqli_query($conn, $sql);
        header("location: admin.php");
        echo $idnew;
    }
?>