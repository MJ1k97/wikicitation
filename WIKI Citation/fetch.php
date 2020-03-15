<?php
    if(isset($_GET['fetch'])) {
 $conn=mysqli_connect("localhost", "root", "", "wikicitations"); 
    $i=0; 
        $val=$_GET['fetch'];

        $sql="SELECT * FROM citations WHERE nomauteur LIKE '%$val%' LIMIT 10";
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
    }
    ?>