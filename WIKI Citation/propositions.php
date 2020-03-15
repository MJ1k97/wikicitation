<?php
    if(isset($_GET['list'])){
    $conn=mysqli_connect("localhost", "root", "", "wikicitations");     
    $sql="SELECT * FROM citations WHERE statut=false";
    $result=mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($resultcheck>0){
        while($row=mysqli_fetch_assoc($result)){
            echo $row['texte'] . "<br/>";
        }
    }}
?>