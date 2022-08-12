<?php
require_once("../Controller/loginController.php");

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
    <!-- Shttp://localhost:8001/Inscription.phptart: ♣ Login form Page BS4 ♣ -->
    <div class="container-fluid">
        <div class="row mh-100vh">
            <!-- Start: Login block -->
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <!-- Start: Login container -->
                <div class="m-auto w-lg-75 w-xl-50">
                    <!-- Start: Your company -->
                    <h2 class="text-info font-weight-light mb-5"><i class="fa fa-automobile"></i>&nbsp;Vroomm</h2>
                    <!-- End: Your company -->
                    <!-- Start: Login form -->
                    <form method="post">
                        <!-- Start: Email -->
                        <div class="form-group"><label class="text-secondary">Email</label><input name="email" class="form-control" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email"></div>
                        <!-- End: Email -->
                        <!-- Start: Password -->
                        <div class="form-group"><label class="text-secondary">Password</label><input name="password" class="form-control" type="password" required=""></div>
                        <!-- End: Password -->
                        <input type="submit" class="btn btn-info mt-2" role="button" value="Se Connectez" name="btn">
                        <!-- Start: Submit -->
                        <!-- End: Submit -->
                    </form>
                    <!-- End: Login form -->
                    <!-- Start: Forgot password -->
                    <p class="mt-3 mb-0" style="font-size: 15PX;width: 350px;">Vous n'aviez pas de compte ?&nbsp;  <a href="/inscription">Inscrivez-vous</a> </p>
                    <!-- End: Forgot password -->
                </div>
                <!-- End: Login container -->
            </div>
            <!-- End: Login block -->
            <!-- Start: Background image -->
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image: url(&quot;/assets/img/pexels-trace-constant-707046.jpg?h=ee8ee0aaa7428f0864b3bfe030789a76&quot;);background-size: cover;background-position: center center;">
                <!-- Start: Credit photo -->
                <p class="ml-auto small text-dark mb-2"><br></p>
                <!-- End: Credit photo -->
            </div>
            <!-- End: Background image -->
        </div>
    </div>
    <!-- End: ♣ Login form Page BS4 ♣ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.min.js?h=884b89c8b63d7dc5d220db6a12eb1886"></script>
</body>

</html>