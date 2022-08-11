<?php

session_start();

$request = strtolower($_SERVER["REQUEST_URI"]);

if($request=="/"){
    require_once("../Controller/homeController.php");
}else if($request=="/login"){
    require_once("../Controller/loginController.php");
}else if($request=="/post"){
    require_once("../Controller/postController.php");
}else if($request=="/inscription"){
    require_once("../Controller/inscriptionController.php");
}else if($request=="/creat"){
    require_once("../Controller/creatController.php");
}else if($request=="/profil"){
    require_once("../Controller/profilController.php");
}else if($request=="/about"){
    require_once("../Views/about.php");
}else if($request=="/about_user"){
    require_once("../Views/about_user.php");
}else if($request=="/contact"){
    require_once("../Views/contact.php");
}else if($request=="/contact_user"){
    require_once("../Views/contact_user.php");
}else if($request=="/index.php"){
    require_once("../Views/home.php");
}else{
    require_once("../Views/404.php");
}
