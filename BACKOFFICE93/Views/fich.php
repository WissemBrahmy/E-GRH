<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FICHE</title>

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
	$sal=$admin->getsalaire($v);
	$a=$sal->user_id ;
	$agent=$admin->getemp($a);
    $avance=$admin->getavance($a);
    $absence=$admin->getStatsAbsencebyAgent($a);

 $ab=$absence['abs'];


	?>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BULLETIN DE SALAIRE</title>

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
	<tr >
	<center>BULLETIN DE SALAIRE</center> 
	<center>

	<label><H3 > Employe: </H3></label> <?php echo $agent->nom ?>-<?php echo $agent->prenom ?>
		
	 </center></tr> <br>
<td>
	<label><H4> Matricule : </H4></label> <?php echo $agent->matricule ?>
		
	<br>
	<label><H4> CIN : </H4></label> <?php echo $agent->cin ?>
	<BR>
	<label><H4> Grade : </H4></label> <?php echo $agent->grade ?>
		
	<br>
	<label> <H4>Numero Employé: </H4></label> <?php echo $sal->id ?>
		
	<br>
	<label> <H4>Salaire De Base:</H4> </label> <?php echo $sal->salaire ?> DT
		
	
	<b>+</b><br>
	<label><H4>Prime De Rendemant: </H4></label> <B><?php echo $sal->prime_rend ?>DT</B>
		<b>+</b><br>
	<label><H4>Prime De l'ancienneté: </H4></label> <B><?php echo $sal->prime_ancien ?>DT</B>
		   <b>+</b><br>
	<label><H4>Prime De Présences: </H4></label> <B><?php echo $sal->prime_presence ?>DT</B>
               <b>+</b><br>
	<label><H4>AUTRES Prime : </H4></label> <B><?php echo $sal->prime ?>DT</B>
	  <b>=</b><br>
	

	<BR><td class="btn btn-INFO"  style="margin-left: 50PX">
	<label><H4>TOTALES PRIMES : </H4></label> <B><?php echo $t= $sal->prime+ $sal->prime_rend+ $sal->prime_ancien+ $sal->prime_presence ?>DT</B><br>


<h4>	<?php echo $e=$ab* 15;?></h4>
	<label><H4> SALAIRE BRUT: </H4></label> <?php echo $a=($sal->salaire + $t)-$e; ?>DT <BR>
	<b>-</b><br>
		<label><H4> RETENU CNSS : </H4></label> <?php echo $b=12*$sal->salaire/100; ?>DT <BR>
		<b>=</b><br>
			<label><H4> SALAIRE NET : </H4></label> <?php echo $c= $a-$b; ?>DT <BR>
			<b>-</b><br>
				<label><H4> AVANCE : </H4></label> <?php echo $d=$avance->montant; ?>DT <BR>
<label><H4> Nombre absences  : </H4></label> <?php echo $ab; ?>DT <BR>
<label><H4> Montant à Retirer : </H4></label> <?php echo $e; ?>DT <BR>
				<b>=</b><br>


					<label><H4 class="btn btn-danger"> NET A PAYER: </H4></label><h4 style="padding-bottom: 15px"> <?php echo $e= ($c-$d)-$e; ?>DT </h4><BR>
	</td>


	</tr><?php } ?> </table> </DIV></center>



</head></html>
