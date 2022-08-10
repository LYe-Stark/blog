<?php
 session_start();
function filter($text){
    return htmlentities(htmlspecialchars($text));
     
}

if(isset($_POST["btn"])){
    
    $tmpname =$_FILES["avatar-file"]["tmp_name"];
    $image_name=$_FILES["avatar-file"]["name"];
    $title=filter($_POST["title"]);
    $description =filter($_POST["description"]);
    $date =date("d-m-Y");
    
  $db = new PDO("mysql:host=localhost;dbname=blog","paterne","Lye2003");

   
   $id =$_SESSION["id"];
   $_SESSION["data"]=$tmpname;
    
   $request =$db->prepare("insert into post(title,description,image_name,date,idU) values(?,?,?,?,?)"); 
   $request->execute([$title,$description,$image_name,$date,$id]);
   
   $tabExtension = explode('.', $image_name);
$extension = strtolower(end($tabExtension));
//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif'];
if(in_array($extension, $extensions)){
    
     move_uploaded_file($tmpname,"./upload/".$image_name);
}
else{
    echo "Mauvaise extension";
}
  
   header("location:./post.php"); 
   
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=036e81a3a3dfb426e99f3cc1c2293e25">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=c36df51f0c75c7cbd952791601ac662c">
</head>

<body>
    <!-- Start: Profile Edit Form -->
    <div class="container profile profile-view" id="profil">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
            </div>
        </div>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center" style="background-image: url(&quot;/assets/img/img_212915.png?h=bffae33205534b14b6b6a08e3dce03c6&quot;);"></div>
                    </div><input type="file" class="form-control" name="avatar-file"></div>
                <div class="col-md-8">
                    <h1>Créez une publication&nbsp;</h1>
                    
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><input class="form-control" placeholder="Entrez le titre de votre publication" type="text" name="title" style="width: 650px;"></div>
                        </div>
                    </div>
                    <div class="form-group"><textarea class="form-control" style="height: 250px;" name="description" placeholder="Entrez la description" ></textarea></div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 content-right">
                            <input type="submit" class="btn btn-primary form-btn" role="button" value="PUBLIER" name="btn">
                            <a class="btn btn-danger form-btn" role="button" href="/post.php">ANNULER</a></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End: Profile Edit Form -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.min.js?h=884b89c8b63d7dc5d220db6a12eb1886"></script>
</body>

</html>