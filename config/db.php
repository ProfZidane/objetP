<?php
    
    
$serveur ="localhost";
$login ="root";
$pass="";
$db_name="objet";
 
 try{

    $connexion= new PDO("mysql:host=$serveur;dbname=$db_name", $login,$pass);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);  

 }
 catch(PDOException $e){
    echo'Echec de la connexion :'.$e->getMessage();
}



?>