 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Item - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <style type="text/css">
   #register {
      text-decoration:none;
   }
   </style>

  </head>

  <body>
     <!-- Page Header -->

    <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="connexion.php">Se connecter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Qui sommes-nous</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> 
 <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Connexion
                  
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Accueil &nbsp;</a>
                    </li>
                    <li class="active"> &nbsp;Connexion /</li>
                    <li class="font-weight-bold text-decoration:none;"> 
                    	<a href="#" id="register" class="text-decoration:none;" color="black">&nbsp;  Créer compte </a>
                    </li>
                </ol>
            </div>
        </div> 
<div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="#">
                        
                        <div class="form-group">
                            <label for="mail" class="cols-sm-2 control-label">Mail</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="mail" id="mail"  placeholder="Adresse mail utilisée lors de l'inscription"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pass" class="cols-sm-2 control-label">Mot de passe</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="pass" id="pass"  placeholder="saisir le mot de passe"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Connexion</button>
                        </div>
                        <div class="login-register">
                            <a href="forgetpwd.php">Mot de passe oublié ? Cliquez ici !</a>
                         </div>
                    </form>
                    <!-- <p id="message"><?= $message?:'' ?><p> -->
                        
                        <!--<script>
                            setTimeout("location.href='login.php';", 4000);
                        </script> -->
                </div>
                


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>          