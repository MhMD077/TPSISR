<?php 
$conn = new mysqli("10.3.208.122","root","tpsisr","koo_2_fourchette");
if($conn->connect_error){
    die('erreur:'.$conn->connect_error);
} else{
    echo"connexion à la base de donnée établis";
}




?>