<?php 
$conn = new mysqli("192.168.252.138","root","tpsisr","koo_2_fourchette");
if($conn->connect_error){
    die('erreur:'.$conn->connect_error);
} else{
    echo"connexion à la base de donnée établis";
}




?>
