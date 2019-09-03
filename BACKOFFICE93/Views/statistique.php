<?php
$stats=$admin->getStats();

?>
		
			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Statistiques Génerales</h3>
			</div>
		</div><!--/.ред-->
		
	
				
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
 

  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;"><img src="images/abs.png" alt="logo" width="60px" height="60px" />TOTALE  ABSENCES:&nbsp<?php echo $stats['absence']; ?></div>
    <div class="col-sm-4" style="background-color:lavenderblush;"> <img src="images/salaire.png" alt="logo" width="70px" height="70px" />TOTALE SALAIRES:&nbsp<?php echo $stats['salaire']; ?> </div>
        <div class="col-sm-4" style="background-color:lavenderblush;"><img src="images/msg.png" alt="logo" width="60px" height="60px" />TOTALE MESSAGES:&nbsp<?php echo $stats['message']; ?> </div>
  </div>
   <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">		<img src="images/users.png" alt="logo" width="60px" height="60px" />TOTALE EMPLOYES:&nbsp<?php echo $stats['user']; ?></div>
  <div class="col-sm-4" style="background-color:lavenderblush;">		<img src="images/JOUR.png" alt="logo" width="60px" height="60px" />TOTALE JOURS FERIERS:&nbsp<?php echo $stats['jours_feriers']; ?></div>
     <div class="col-sm-4" style="background-color:lavenderblush;">		<img src="images/RAP.png" alt="logo" width="60px" height="60px" />TOTALE RAPPORTS:&nbsp<?php echo $stats['rapport']; ?></div>
  </div>

 <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">		<img src="images/stage.png" alt="logo" width="60px" height="60px" />TOTALE STAGIAIRES:&nbsp<?php echo $stats['stagiaire']; ?></div>
  <div class="col-sm-4" style="background-color:lavenderblush;">		<img src="images/cong.png" alt="logo" width="60px" height="60px" />TOTALE CONGES:&nbsp<?php echo $stats['conge']; ?></div>
     <div class="col-sm-4" style="background-color:lavenderblush;">		<img src="images/form.png" alt="logo" width="60px" height="60px" />TOTALE FORMATIONS:&nbsp<?php echo $stats['formation']; ?></div>
  </div>

</div>
    

				
				

				
					

		</div>
		<br><br><br><br><br><br><br><br><br><br><br>
	
		

		<!--/.main-->

