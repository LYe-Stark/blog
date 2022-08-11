<?php
session_start();
require_once("../Controller/inscriptionController.php");

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
        <form method="post" enctype="multipart/form-data">
            <div class="form-row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div><input type="file" class="form-control" name="avatar-file"></div>
                <div class="col-md-8">
                    <h1>Inscription</h1>
                    <hr>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Nom :</label><input class="form-control" type="text" name="firstname"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Prénom :</label><input class="form-control" type="text" name="lastname"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>Email </label><input class="form-control" type="email" autocomplete="off" required="" name="email"></div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group"><label>Password :</label><input class="form-control" type="password" name="password" autocomplete="off" required=""></div>
                        </div>
                       
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 content-right">
                            <input type="submit" class="btn btn-primary form-btn" role="button" value="Enregistrez" name="btn">
                            <a class="btn btn-danger form-btn" role="button" href="/post">Retour</a>
                        </div>
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