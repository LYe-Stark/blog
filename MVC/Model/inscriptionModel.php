<?php

$db = new PDO("mysql:host=localhost;dbname=blog","paterne","Lye2003");
   $request =$db->prepare("insert into users(image,nom,prenom,email,password) values(?,?,?,?,?)"); 
   $request->execute([$image,$name,$lastname,$email,$hash]);