<?php



    

    $db = new PDO("mysql:host=localhost;dbname=blog","Vl","gera123");
    $request =$db->query("select * from users where email='".$email."'");
    $user= $request->fetch(); //fetchall pour recuperer tout les element du querry
