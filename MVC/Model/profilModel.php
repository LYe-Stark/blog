<?php

session_start();
$db = new PDO("mysql:host=localhost;dbname=blog","paterne","Lye2003");

    $request =$db->query("SELECT * FROM `users`,`post` WHERE users.idU=post.idU");
    $private= $request->fetch(); 
    
    
    
        

