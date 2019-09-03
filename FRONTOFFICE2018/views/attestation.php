<!DOCTYPE html>


<?php

if(isset($_GET['voir'])){

$v=$_GET['voir'];
	$attest=$emp-> getAttestationBYagent($v);
	if ($attest  )    {
	$agent=$emp->getemp($v);
	
   $sal=$emp->getsalaire($v);
	?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ATTESTATION DE PRESENCE</title>

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



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ATTESTATION DE PRESENCE</title>

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
<center><div class="panel panel-default" style="width: 500px;height: 600px">
						<table    >
							    	

<label><H4> RH-Entreprise </H4></label> 
		
	<br>
	<label><H4> Avenue Habib Bourguiba</H4></label> 
	<BR>
	<label><H4> 5000 MONASTIR</H4></label> 

<br>
	<img src="images/rh.jpg" alt="logo" /> 
	<center>

	<tr >
	<center>ATTESTATION DE PRESENCE </center> 
	<center>

	
		<label><H4 > Numero: <?php echo $attest->id?></H4></label>
	 </center></tr> <br>

	 <div>

		
	
	
	

	
	<td style="margin-right: 50px" class="col-lg-12">
	

				<P>Je soussigné,  BRAHIMI WISSEM , agissant en qualité de GESTION de la société <b>RH-ENTREPRISE<b>, domiciliée au Avenue Habib Bourguiba, atteste que :

<?php echo $agent->nom ?>-<?php echo $agent->prenom ?>,

immatriculé <?php echo $agent->matricule ?>, numéro carte identité <?php echo $agent->cin ?> et demeurant <?php echo $agent->adresse ?> est employé dans notre entreprise en qualité de <?php echo $agent->grade ?> à temps plein  depuis le &nbsp <?php echo $agent->date ?> au titre d'un contrat à durée indéterminée.

A cet effet, il perçoit un salaire mensuel brut contractuel de <?php echo $sal->salaire?>DINAR.

Cette attestation est délivrée à la demande de l'intéressé pour servir et valoir ce que de droit. <BR>

Fait à MONASTIR, le &nbsp <?php echo date("Y-m-d");  ?><br><BR> <br><img src="images/CODE.PNG" alt="logo" width="60" height="50" /> </P>

					</td>


	</tr><?php } ?> </center></table> </div></center>

<?php } 
else { echo $error;  }
?>
</head></html>
