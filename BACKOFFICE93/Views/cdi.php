<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CONTRAT DE TRAVAIL A DUREE INDETERMINEE 
A TEMPS COMPLET
</title>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> 
         <![endif]-->
<?php

if(isset($_GET['voir'])){

$v=$_GET['voir'];
	$attest=$admin-> getattestation($v);
	
	$agent=$admin->getemp($v);
	
   $sal=$admin->getsalaire($v);
	?>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CONTRAT DE TRAVAIL A DUREE INDETERMINEE 
A TEMPS COMPLET
</title>

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
<button  onClick="print()"  class="btn btn-Warning" >
							  		
							    		<span class="glyphicon glyphicon-print" aria-hidden="true">	Imprimer</span>	
							    		</button>
<br>
							    	

<b> E-RH-Entreprise </b> 
		<img src="images/rh.jpg" alt="logo"  style="margin-left: 840px" /> 
	<br>
	<label><b> Avenue Habib Bourguiba</b></label> 
	<BR>
	<label><b> 5000 MONASTIR</b></label> 


	
	

	
	<center><b style="color: blue;font-size: 30">CONTRAT DE TRAVAIL A DUREE INDETERMINEE 
A TEMPS COMPLET</b>
 </center> 
	

<br>
		
	
	
	<b style="color: black;font-size: 25">

	

	

				<P>Entre les soussignés : <br>
 
L’association dénommée E-RH ENTREPRISE <br>
SIRET n°  8799456633 <br>
Code NAF (APE) 00254789441 <br>
dont le siège social est situé à :  MONASTIR <br>
Représentée par son (sa) président(e) M/Mme.  BRAHMI WISSEM , <br>

d'une part,<br>
 
</P>
<div style="margin-left: 600px">
<p>et M/Mme&nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?> <br>
demeurant à : &nbsp <?php echo $agent->adresse ?><br>
Né(e) le &nbsp <?php echo $agent->date_naissance ?> &nbsp  à &nbsp <?php echo $agent->ville ?>. <br>
Nationalité : TUNISIENNE.<br>

d'autre part.<br> </div>
</p>
<b style="font-size: 30">Il a été convenu ce qui suit :</b><br><br>
<b style="font-size: 20"><u>ENGAGEMENT</u></b>
<p>M/Mme&nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?> , qui se déclare libre de tout engagement, est engagé en qualité de<?php echo $agent->grade ?> &nbsp , sous réserve des résultats de la visite médicale d'embauche à laquelle il/elle s’engage à se soumettre.
(Le présent contrat est régi par les dispositions de la convention collective ainsi que les règlements intérieur de la société  )

</p><br><br>
<b style="font-size: 20"><u>DUREE DU CONTRAT - PERIODE D'ESSAI</u></b>

<p>Le présent contrat est conclu pour une durée indéterminée à compter du &nbsp <?php echo $agent->date ?>&nbsp 
Il ne deviendra définitif qu'à l'issue d'une période d'essai de 3 mois.
Durant cette période, chacune des parties pourra rompre le contrat sans préavis ni indemnité.
</p>
<br><br>
<b style="font-size: 20"><u>FONCTIONS</u></b>
<p>En sa qualité, M/Mme&nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?> sera chargé(é) de LA POSTE: &nbsp <?php echo $agent->grade ?>. <BR>
M/Mme &nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?> sera placée sous l’autorité hiérarchique du/de la Président(e) de l’association.
</p><br><br>
<b style="font-size: 20"><u>HORAIRES DE TRAVAIL</u></b>

<p>M/Mme&nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?> s'engage à respecter l'horaire de travail de l'association, la durée hebdomadaire de travail étant pour lui/elle de 35 heures, répartis de la manière suivante : 8H à 12H et 14H à 17H du lundi au vendredi, sauf exceptions.</p><br><br>
<b style="font-size: 20"><u>LIEU DE TRAVAIL</u></b>

<p>M/Mme &nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?>&nbsp  exercera ses fonctions à MONASTIR.


</p><br><br>
<b style="font-size: 20"><u>REMUNERATION</u></b>

<p>M/Mme&nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?>&nbsp  percevra une rémunération mensuelle brute de &nbsp <?php echo $sal->salaire?>&nbsp  DINAR en contrepartie de son travail, à l’exclusion de tout autre avantage.</p>

<b style="font-size: 20"><u>PREAVIS</u></b>
<p>A l'issue de la période d'essai, si elle s'est révélée satisfaisante, le présent contrat deviendra définitif et se poursuivra pour une durée indéterminée, chacune des parties ayant le droit d'y mettre fin dans les conditions fixées à cet effet par la loi, sous réserve de respecter, sauf cas de faute grave ou lourde, un délai de préavis fixé à : 
</p>
<p>1 mois pour un licenciement ;</p>
<p>2 mois pour une démission.</p>
<br><br>
<b style="font-size: 20"><u>CONGES PAYES</u></b>
<p>M/Mme&nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?>&nbsp  bénéficiera de droits aux congés payés sur la base légale de 2,5 jours ouvrables par mois de travail. Les périodes de congés seront déterminée par accord entre la direction de E-RH ENTREPRISE et M/Mme&nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?> &nbsp compte tenu des nécessités de service.
 <br><br>
 



<b>Fait à MONASTIR, en double exemplaire originaux, le <?php echo date('y-m-j') ?>.
 
</b>
<p>Date et signatures des deux parties précédées de la mention manuscrite "lu et approuvé" :</p> <BR><BR>
<b>L’employeur </b>  <b style="margin-left: 530px">salarié</b><br><br>
<b>.....................</b> <b style="margin-left: 530px">...............</b><br><br><br>


</b>





			


	<?php } ?> 



</html>
