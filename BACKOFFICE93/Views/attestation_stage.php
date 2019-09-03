<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ATTESTATION DE STAGE</title>

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
	$attest=$admin-> getattestationstage($v);
	
	
	
   
	?>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ATTESTATION DE STAGE</title>

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
							    		</button> <BR>

						<table    >
							    	
<img src="images/rh.jpg" alt="logo" /> 

	
	<center>

	<tr >
	<center style=" font-size: 20">ATTESTATION DE STAGE </center> 
	<center>

	
		
	 </center></tr> <br>

	

		
	
	
	

	
	<td style="margin-right: 50px; font-size: 20" class="col-lg-12">
	

Je soussigné(e), M./Mme BRAHMI wissem. 
Fonction : DIRECTEUR RESSOURCES HUMMAINNES.
<br>
Atteste que M./Mme :<?php echo $attest->nom ?>-<?php echo $attest->prenom ?>,.<br>
immatriculé <?php echo $attest->matricule ?>, numéro carte identité <?php echo $attest->cin ?> <BR>
a effectué un stage dans notre établissement E-RH ENTREPRISE du &nbsp <?php echo $attest->date_deb ?> <br>
au  &nbsp <?php echo $attest->date_deb ?> .<br>

Nous délivrons la présente attestation pour servir et valoir ce que de droit.

                Fait à MONASTIR, le <?php echo date('y-m-j') ?><br><BR>




 Cachet ET Signature<BR><BR>
 .........................




<br><br><br><br><br>
<center><p style="font-size: 12"> Avenue Habib Bourguiba    5000 MONASTIR <br>
Tél +216 71 255 336    Fax Administration  +216 71 554 889    Fax Intendance +216 71 421 361    Fax Ateliers +216 71 002 118 
</p>
</center>

					</td>


	</tr><?php } ?> </center></table> </div></center>



</head></html>
