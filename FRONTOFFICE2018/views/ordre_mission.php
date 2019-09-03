<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ORDRE DE MISSION</title>

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
	$dep=$emp-> getDeplacement($v);
	$a=$dep->user_id ;
	$agent=$emp->getemp($a);
   
	?>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ORDRE DE MISSION</title>

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
<center><div class="panel panel-default">
						<table    >
							    		<center><img src="images/rh.jpg" alt="logo" /> </center> 
	<center>

	<tr >
	<center>ORDRE DE MISSION </center> 
	<center>

	<label><H3 > Employe: </H3></label> <?php echo $agent->nom ?>-<?php echo $agent->prenom ?>
		
	 </center></tr> <br>

	 <div>
<td class="btn btn-info"  style="width: 400PX">
	<label><H4> Matricule : </H4></label> <?php echo $agent->matricule ?>
		
	<br>
	<label><H4> CIN : </H4></label> <?php echo $agent->cin ?>
	<BR>
	<label><H4> Grade : </H4></label> <?php echo $agent->grade ?>
		
	<br>
	<label> <H4>Numero Déplacement: </H4></label> <?php echo $dep->id ?>
		
	<br>
	
	

	<BR>
	<label><H4>Objet De la Mission: </H4></label> <B><?php echo $dep->objet_mission ?></B><br>
	<td style="margin-right: 50px" class="col-lg-12">
	
	
		<br>
	<label><H4>Date de départ: </H4></label> <B><?php echo $dep->date_depart ?></B>
		   <br>
	<label><H4>Date de retour: </H4></label> <B><?php echo $dep->date_retour ?></B>
             <br>
	<label><H4>Moyen de transport : </H4></label> <B><?php echo $dep->moyen_transport ?></B>
	<br>
	<label > <H4>Fonction:</H4> </label>&nbsp <?php echo $dep->fonction ?> 
		</div>
	<br><br>
				
					<label><H4 class="btn btn-danger" style="margin-left: 50px">DATE: </label> <?php echo $dep->date; ?> </h4><BR></div>
	</td>


	</tr><?php } ?> </center></table> </div></center>



</head></html>
