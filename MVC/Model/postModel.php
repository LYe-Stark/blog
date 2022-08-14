<?php
  $publier='PUBLIER';
 $db=NEW PDO('mysql:host=localhost;dbname=blog',"paterne","Lye2003");
   $query=$db->query("SELECT * from post");
   