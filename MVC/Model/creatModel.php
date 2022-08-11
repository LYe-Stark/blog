<?php
 $request =$db->prepare("insert into post(title,description,image_name,date,idU) values(?,?,?,?,?)"); 
   $request->execute([$title,$description,$image_name,$date,$id]);