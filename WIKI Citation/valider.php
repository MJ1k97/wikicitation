<?php
    include "admin.php";
    //algorithme de validation des citations proposees
    $conn=mysqli_connect("localhost", "root", "", "wikicitations");
            for($k=0;$k<$i;$k++){
                $index='ok'.$k;
                echo $index;
                if(isset($_GET['$index'])){
                $sql="UPDATE citations SET statut=true WHERE id_citation=$copy[$k]";
                mysqli_query($conn, $sql);
        }
    }  
?>

<textarea cols=50 rows=5 name='citation' required='required' placeholder='nouvelle citation'></textarea>
<input type='text' name='auteur' required='required' placeholder='nom auteur'/>
<textarea cols=50 rows= 5 maxlength='2000' name='bio' placeholder='biographie auteur'></textarea>
<input type='text' name='siecle' placeholder='siecle de publication'/>
<input type='text' name='theme' placeholder='theme principale abordé'/>
<input type='submit' name='ajouter' value='Ajouter'/>
<input type='reset' name='annuler' value='Annuler'/>