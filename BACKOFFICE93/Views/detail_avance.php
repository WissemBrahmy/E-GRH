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
	
	
  $avance=$admin->getAvancebyAgent($v);


 $avance_r=$admin->getAvancerefusebyAgent($v);
 $avance_a=$admin->getAvanceattentebyAgent($v);

$stats=$admin->getStatsbyagent($v);


}	?>
<button id="" onClick="window.print()"  class="btn btn-Warning" >
							  		
							    		<span class="glyphicon glyphicon-print" aria-hidden="true">	Imprimer</span>	
							    		</button>
<body>


<br><br>
<center>
<img src="http:\\localhost/pfa/frontoffice2018/photos/<?php echo $agent->photo; ?>" alt="photo" width="100px" height="100px" style="margin-right: 200px"/>

<img src="images/rh.jpg" alt="logo"  />
 <br><br>

<b style="margin-left: :150px">FICHE ANALYTIQUE DES AVANCES </b> <BR><BR>
<H2 class="btn btn-danger"><b> Employe:  <?php echo $agent->nom ?>-<?php echo $agent->prenom ?></b> </h2>
<H3> Matricule :  <?php echo $agent->matricule ?> &nbsp &nbsp &nbsp &nbsp &nbsp  CIN : <?php echo $agent->cin ?> </H3>
<H4> Grade : <?php echo $agent->grade ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Numero Employé: <?php echo $agent->id ?></H4>


 <table border="2"><tr>
<td style="padding-right: 50px;padding-left: 50px; padding-top: 40px" >
 <h4>Nombre Totales Des Demandes &nbsp<?php echo $stats['avc']; ?></h4>
<b> AVANCES ACCEPTES</b>
 <?php foreach($avance as $avance){ 

?>
 <H6>   AVANCE NUMERO:  <?php echo $avance->id; ?>  
		&nbsp &nbsp
 Demander Le :  <?php echo $avance->date; ?> </H6> <?php } ?>
<br>

<b> AVANCES REFUSES</b>
 <?php foreach($avance_r as $avance_r){ 

?>
 <H6>   AVANCE NUMERO:  <?php echo $avance_r->id; ?>  
		&nbsp &nbsp
 Demander Le :  <?php echo $avance_r->date; ?> </H6> <?php } ?>
<br><br>
<b> AVANCES EN ATTENTES</b>
 <?php foreach($avance_a as $avance_a){ 

?>
 <H6>   AVANCE NUMERO:  <?php echo $avance_a->id; ?>  
		&nbsp &nbsp
 Demander Le :  <?php echo $avance_a->date; ?> </H6> <?php } ?>


</td></tr></table>

</center>



</body> 
</html>

