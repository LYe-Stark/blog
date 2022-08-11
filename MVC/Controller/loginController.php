<?php

function filter($word){
    return htmlentities(htmlspecialchars($word));
     // htmlentities permet de verifier l'entrez de l'utilisateur pour evitez l'injection du code
}

if(isset($_POST["btn"])){
     $email = filter($_POST["email"]);
    $password = filter($_POST["password"]);

   require_once("../Model/loginModel.php");
  
if($user){
        $hash_password =$user["password"];
        if(password_verify($password,$hash_password)){
            session_start(); // obligatoire
            $_SESSION["id"]=$user["idU"];
            $_SESSION['user']=$user["nom"]." ".$user["prenom"]; //pour enregistrer une session 
            
            header("location:./post.php");
        }else{
            echo("Mot de passe incoorect");
        }

    }else{
        echo("Désolé vous n'aviez pas de compte veuillez vous inscrire");
    }
    
}

require_once("../Views/login.php");



?>