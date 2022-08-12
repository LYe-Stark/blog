<?php
  $publier='PUBLIER';
 $db=NEW PDO('mysql:host=localhost;dbname=blog',"Vl","gera123");
   $query=$db->query("SELECT * from post");