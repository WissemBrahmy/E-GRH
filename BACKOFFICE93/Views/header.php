<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PFA-2018</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">

<link href="css/bootstrap-table.css" rel="stylesheet">
  <link rel="stylesheet" href="css/messi.min.css" />
<script src="js/messi.js"></script>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

 >

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                   
                </button>
                <a  class="plan-purchase" href="index.php"><?php @print($_SESSION['prenom']);?> <?php @print($_SESSION['nom']);  ?></a>

            <a href="index.php?action=deconnecte" title="logout" class="glyphicon glyphicon-off" style="margin-right: 15px;margin-top: 15px">
        
        </a>
                    
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php" class="glyphicon glyphicon-home"><b style="margin-left: 5px">Accueil</b></a>
                    </li>

                    <li>
                        <a href="index.php?page=agents" class="glyphicon glyphicon-user"><b style="margin-left: 5px;size: 20px">Employés</b></a>
                    </li>
                    
                        <li>
                        <a href="index.php?page=absences" class="glyphicon glyphicon-dashboard"><b style="margin-left: 5px">Absences</b></a>
                    </li>
  <li>
                        <a href="index.php?page=salaires" class="glyphicon glyphicon-usd"><b style="margin-left: 5px;">Salaires</b></a>
                    </li>
                    <li>
                        <a href="index.php?page=conges" class="glyphicon glyphicon-calendar"><b style="margin-left: 5px">Congés</b></a>
                    </li>
                   
                     <li>
                        <a href="index.php?page=deplacements"  class="glyphicon glyphicon-map-marker"><b style="margin-left: 5px">Déplacements</b></a>
                    </li>
                   
                     <li>
                        <a href="index.php?page=pointages" class="glyphicon glyphicon-ok-sign"><b style="margin-left: 5px">Pointages</b></a>
                    </li> 
                    <li>
                        <a href="index.php?page=partages" class="glyphicon glyphicon-duplicate"><b style="margin-left: 5px">Rapports</b></a>
                    </li>
                       
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->