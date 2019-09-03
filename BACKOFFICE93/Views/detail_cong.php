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
	
	$stats=$admin->getStatsCongbyagent($v);

  $cong=$admin->getCongebyAgent($v);

 $cong_r=$admin->getCongerefusebyAgent($v);
 $cong_a=$admin->getCongeattentebyAgent($v);
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

<b style="margin-left: :150px">FICHE ANALYTIQUE DES CONGES </b> <BR><BR>
<H2 class="btn btn-danger"><b> Employe:  <?php echo $agent->nom ?>-<?php echo $agent->prenom ?></b> </h2>
<H3> Matricule :  <?php echo $agent->matricule ?> &nbsp &nbsp &nbsp &nbsp &nbsp  CIN : <?php echo $agent->cin ?> </H3>
<H4> Grade : <?php echo $agent->grade ?> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Numero Employé: <?php echo $agent->id ?></H4>


 <table border="2"><tr>
<td style="padding-right: 50px;padding-left: 50px; padding-top: 40px" >
 <h4>Nombre Totales Des Demandes &nbsp<?php echo $stats['cong']; ?></h4>
<b> CONGES ACCEPTES</b>
 <?php foreach($cong as $cong){ 

?>
 <H6>   CONGE NUMERO:  <?php echo $cong->id; ?>  
		&nbsp &nbsp
 Demander Le :  <?php echo $cong->date_demande; ?> </H6> <?php } ?>


<b> CONGES REFUSES</b>
 <?php foreach($cong_r as $cong_r){ 

?>
 <H6>   CONGE NUMERO:  <?php echo $cong_r->id; ?>  
		&nbsp &nbsp
 Demander Le :  <?php echo $cong_r->date_demande; ?> </H6> <?php } ?>

<b> CONGES EN ATTENTES</b>
 <?php foreach($cong_a as $cong_a){ 

?>
 <H6>   CONGE NUMERO:  <?php echo $cong_a->id; ?>  
		&nbsp &nbsp
 Demander Le :  <?php echo $cong_a->date_demande; ?> </H6> <?php } ?>


</td></tr></table>

</center>



</body> 
</html>

