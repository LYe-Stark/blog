<?php
require('../Model/db.config.php');
class UserModel extends dbConfig{
  public function register($title,$description,$image_name,$date,$idu)
  {
    $db=$this->dbConnect;
    $request =$db->prepare("insert into post(title,description,image_name,date,idu) values(?,?,?,?,?)"); 
    $request->execute([$title,$description,$image_name,$date,$idu]);
  }
}
 