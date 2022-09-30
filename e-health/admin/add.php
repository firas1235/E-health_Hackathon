<?php

   
$Nom = htmlspecialchars(trim($_POST['Nom']));
//$Prenom = htmlspecialchars(trim($_POST['Prenom']));
//$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));

   

   
       
                

             
 

    $c = new mysqli ("localhost","root","","med_db");
  

$sql = "INSERT INTO admin VALUES ('null','$Nom','$password')";
  

$res = $c->query($sql);
       // on ferme la connexion




   

   
?>