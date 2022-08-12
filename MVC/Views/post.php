<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog Post - Brand</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css?h=036e81a3a3dfb426e99f3cc1c2293e25">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=c36df51f0c75c7cbd952791601ac662c">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="/post">Vroommm</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div
                class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/post">Acceuil</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/about_user">A propos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/contact_user">Contactez-nous</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/profil">Profil</a></li>
                    
                </ul>
                <a href="/profil.php"><img src="./upload/<?=$_SESSION['picture'];?>" alt="" class="profil"></a>
                
        </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url(&quot;/assets/img/pexels-pixabay-261986.jpg?h=0fc76a72dd86d0a1c94b1054bf1f153e&quot;);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="post-heading">
                        <h1>Explorez les publications, et postez&nbsp; !</h1>
                        <h2 class="subheading">+ 1 millions de publications pour vous .</h2><span class="meta">Postez et explorez c'est fun.........................</span>
                        <a href="creat"><button class="btn btn-primary" id="poster-raduis" type="button" style="margin-top: 200px;margin-left: 200px;">Créez une publication</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>



   <section style="min-width:60em;max-width:67em;min-height:46em;height:auto;border:4px solid #1045DAC9;border-radius:1em;box-shadow: rgba(0, 0, 0, 0.56) 0px 1px 20px 5px;">
                                                                   
                                <table  class="table" >
        

                                    <?php
                                        $idUser=$_SESSION["idU"];

                                      require_once("../Model/postModel.php");
                                        
                                        while($data=$query->fetch()) { 
                                    ?>

                                        <tbody>
                                            <tr style="border-bottom: 4px solid #4801FF;min-height:20em;height:auto;display:list;">
                                                

                                                <td style="padding-left:1em;min-width:5em;height:auto;text-align:center;">
                                                    
                                                     <?php echo $data['title']; ?><br>
                                                        <p></p>
                                                     <?php echo $data['description']; ?><br>
                                                      <img class="img-fluid" src="/upload/<?=$data['image_name'];?>">
                                                        <p></p>
                                                   
                                                    
                                                </td>            
                                            </tr>
                                        </tbody>
                                       
                                    <?php
                                    }
                                    ?>
                                </table>
                    </section> 

    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span></li>
                    </ul>
                    <p class="text-muted copyright">Copyright&nbsp;© Vroom 2022</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.min.js?h=884b89c8b63d7dc5d220db6a12eb1886"></script>
</body>

</html>