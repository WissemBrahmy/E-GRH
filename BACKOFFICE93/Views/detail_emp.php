<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8" />

<title>INFORMATIONS EMPLOYE</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">

<link href="css/bootstrap-table.css" rel="stylesheet">
  <link rel="stylesheet" href="css/messi.min.css" />

</head>


<?php

if(isset($_GET['voir'])){

$v=$_GET['voir'];
	$agent=$admin->getemp($v);
	
	$sal=$admin->getsalairebyAgent($v);
  $abs=$admin->getAbsencebyAgent($v);
  $cong=$admin->getCongebyAgent($v);
$dep=$admin->getDeplacementbyAgent($v);
$not=$admin->getNotebyAgent($v);
}	?>
<button id="" onClick="window.print()"  class="btn btn-Warning" >
							  		
							    		<span class="glyphicon glyphicon-print" aria-hidden="true">	Imprimer</span>	
							    		</button>
<body>


<br><br>
<img src="http:\\localhost/pfa/frontoffice2018/photos/<?php echo $agent->photo; ?>" alt="photo" width="100px" height="100px" style="margin-right: 490px"/>
<img src="images/rh.jpg" alt="logo"  />
 <br><br>


<H2 class="btn btn-danger"><b> Employe:  <?php echo $agent->nom ?>-<?php echo $agent->prenom ?></b> </h2>
<H3> Matricule :  <?php echo $agent->matricule ?></H3>
<H4>Numero Employé: <?php echo $agent->id ?></H4>

<H4> CIN : <?php echo $agent->cin ?> </H4>
<H4> Grade : <?php echo $agent->grade ?></H4>


<H3 text-wrap> DERNIERES REMARQUES </H3>
<?php foreach($not as $not){


 ?>
<h4>Remarque &nbsp<?php echo $not->id; ?></h4>
<p text-wrap style="padding-right: 400px"><?php echo $not->note; ?></p> 
<?php } ?>


 <table border="2"><tr><td style="padding-right: 70px;padding-left: 70px;">
 <br><br>
<b> DERNIERS ABSENCES</b>
 <?php foreach($abs as $abs){ ?>
 <H6>   NOMBRE HEURES ABSENTS:  <?php echo $abs->heures; ?>  
		&nbsp &nbsp
 DATE :  <?php echo $abs->date; ?> </H6> <?php } ?>



</td>
<td style="padding-right: 50px;padding-left: 50px; ">
 
<b> DERNIERS CONGES</b>
 <?php foreach($cong as $cong){ 

?>
 <H6>   CONGE NUMERO:  <?php echo $cong->id; ?>  
		&nbsp &nbsp
 Demander Le :  <?php echo $cong->date_demande; ?> </H6> <?php } ?>

<b> DERNIERS DEPLACEMENTS</b>
 <?php foreach($dep as $dep){ 

?>
 <H6>  DEPLACEMENT NUMERO:  <?php echo $dep->id; ?>  
		&nbsp &nbsp
 VERS :  <?php echo $dep->lieu; ?> </H6> <?php } ?>

 <b > SALAIRE </b> <br>
<?php foreach($sal as $sal){ ?>
<H4 class="btn btn-info">Salaire De Base:<?php echo $sal->salaire ?></H4>
<H4>Prime:<?php echo $sal->prime+$sal->prime_presence+$sal->prime_ancien+$sal->prime_rend ?></H4> <?php } ?>
</td></tr></table>





</body> 
</html>

