<?php

 $db = new PDO("mysql:host=localhost;dbname=blog","paterne","Lye2003");
 $request =$db->prepare("insert into post(title,description,image_name,date,idu) values(?,?,?,?,?)"); 
   $request->execute([$title,$description,$image_name,$date,$idu]);