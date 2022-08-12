<?php
<<<<<<< HEAD
require('../Model/db.config.php');
class UserModel extends dbConfig{
  public function register($title,$description,$image_name,$date,$idu)
  {
    $db=$this->dbConnect;
    $request =$db->prepare("insert into post(title,description,image_name,date,idu) values(?,?,?,?,?)"); 
    $request->execute([$title,$description,$image_name,$date,$idu]);
  }
}
 
=======

 $db = new PDO("mysql:host=localhost;dbname=blog","paterne","Lye2003");
 $request =$db->prepare("insert into post(title,description,image_name,date,idu) values(?,?,?,?,?)"); 
   $request->execute([$title,$description,$image_name,$date,$idu]);
>>>>>>> 46d93eb81177a41c10540dee65592007a1e54bbe
