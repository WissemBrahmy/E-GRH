<!DOCTYPE html>
<html lang="en">

<head>


    <title>PROFIL EMPLOYE</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">

<link href="css/bootstrap-table.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> 
         <![endif]-->
<?php

if(isset($_GET['voir'])){

$v=$_GET['voir'];
	$profils=$admin->getprofilbyID($v);
	$a=$profils->user_id;
	$agent=$admin->getemp($a);
	
  
	?>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PROFIL EMPLOYE</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">

<link href="css/bootstrap-table.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

 <!-- jQuery -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-table.js"></script>
<button  onClick="window.print()"  class="btn btn-Warning" >
							  		
							    		<span class="glyphicon glyphicon-print" aria-hidden="true">	Imprimer</span>	
							    		</button>

				<br>
							    	

<img src="http:\\localhost/pfa/frontoffice2018/photos/<?php echo $agent->photo; ?>" alt="photo" width="70px" height="70px" /> <img src="images/rh.jpg" alt="logo" style="margin-left: 800px" /> 
		
	<br>
	<label><H4> <?php echo $agent->nom ?>-<?php echo $agent->prenom ?>,</H4></label> 
	<BR>
	<label><H4> MATRICULE: &nbsp <?php echo $agent->matricule ?> &nbsp &nbsp CIN:&nbsp <?php echo $agent->cin ?></H4></label> 

<br>
<label><H4></H4></label> 

<br>
	  <label><H4>ETAT CIVIL: <?php echo $profils->etat_civil ?></H4></label> 

<br> 
   
	
<center ><h4 class="btn-Warning">NIVEAU D'ETUDE: <?php echo $profils->niveau_etude ?></h4></center>

	<table>
		<tr><td style="padding-right: 300px">
	<br>
<h4><b><u>Diplome</u>: &nbsp <br><?php echo $profils->diplome ?> </b></h4><br>
<h4><b><u>Autres Formations</u>: &nbsp <br> <?php echo $profils->autre_formation ?> </b></h4><br>
<h4><b><u>Competences: </u>&nbsp <br> <?php echo $profils->competence ?> </b></h4><br>


</td><td style="padding-top: 120px">
<h4><b><u>Experiences: </u>&nbsp <br><?php echo $profils->experience ?> </b></h4><br>
<h4><b><u>Stages: </u> &nbsp <br><?php echo $profils->stage ?> </b></h4><br>
<h4><b><u>langue</u>: &nbsp <?php echo $profils->langue ?> </b></h4><br>
<h4><b><u>Vie associative:</u>: &nbsp <?php echo $profils->association ?> </b></h4><br>
<h4><b><u>Centre d'interet:</u> &nbsp <br><?php echo $profils->centre_interet ?> </b></h4><br>



					<?php } ?> 

</td></tr></table>
</html>
