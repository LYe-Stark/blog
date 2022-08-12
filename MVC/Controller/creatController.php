<?php
 session_start();
function filter($text){
    return htmlentities(htmlspecialchars($text));
     
}

if(isset($_POST["btn"])){
    
    $tmpname =$_FILES["avatar-file"]["tmp_name"];
    $image_name=$_FILES["avatar-file"]["name"];
    $title=filter($_POST["title"]);
    $description =filter($_POST["description"]);
    $date =date("d-m-Y");
    
  $db = new PDO("mysql:host=localhost;dbname=blog","Vl","gera123");

   
   $id =$_SESSION["id"];
   $_SESSION["data"]=$tmpname;
    
  require_once("../Model/creatModel.php");
   
   $tabExtension = explode('.', $image_name);
$extension = strtolower(end($tabExtension));
//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif'];
if(in_array($extension, $extensions)){
    
     move_uploaded_file($tmpname,"../upload/".$image_name);
}
else{
    echo "Mauvaise extension";
}
  
   header("location:./post"); 
   
}


require_once("../Views/creat.php");
