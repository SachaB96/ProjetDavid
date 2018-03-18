<?php 

function isConnected(){

  if( !empty($_SESSION["accesstoken"]) && !empty($_SESSION["email"])){

  $db = connectDb();
       $query = $db->prepare(" SELECT id FROM users WHERE email=:tutu AND accesstoken=:toto");
       $query->execute(["tutu" => $_SESSION['email'], "toto" => $_SESSION['accesstoken']]);
       $result = $query->fetch();
       
       //Vérifier qu'il existe un utilisateur avec l'email $_SESSION['email'] associé au accesstoken $_SESSION['accesstoken']
       if(!empty($result)){
           // Si oui on regénère un accesstoken et on retourne vrai
           $_SESSION['accesstoken'] = generateAccessToken($_SESSION['email']);
           return true;
       }else{
           // Sinon on retourne faux 
           return false;
       }
       
   }
   
}



?>