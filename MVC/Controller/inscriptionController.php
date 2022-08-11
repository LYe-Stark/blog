<?php

function filter($text){
    return htmlentities(htmlspecialchars($text));
     
}

if(isset($_POST["btn"])){
    $tmpname =$_FILES["avatar-file"]["tmp_name"];
   

    $image=$_FILES["avatar-file"]["name"];
    $name = filter($_POST["firstname"]);
$lastname = filter($_POST["lastname"]);
$email = filter($_POST["email"]);
$password = filter($_POST["password"]);
$hash = password_hash($password,PASSWORD_DEFAULT);
    
require_once("../Model/inscriptionModel.php");
 

      $tabExtension = explode('.', $image);
$extension = strtolower(end($tabExtension));
//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif'];
if(in_array($extension, $extensions)){
    
     move_uploaded_file($tmpname,"./upload/".$image);
     $_SESSION["picture"]=$image;
}
else{
    echo "Mauvaise extension";
}

   header("location:./login");
}

require_once("../Views/inscription.php");