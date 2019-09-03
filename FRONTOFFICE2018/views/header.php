
	<?php
	$infos=$emp->getabsenceemp();
	?>

 <!-- jQuery -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-table.js"></script>

<!DOCTYPE html>
<html>
	<head>
		<title>RH Entreprise</title>
		<!--meta-->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="keywords" content="Medic, Medical Center" />
		<meta name="description" content="Responsive Medical Health Template" />
		<!--style-->
		<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Volkhov:400italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style/reset.css" />
		<link rel="stylesheet" type="text/css" href="style/superfish.css" />
		<link rel="stylesheet" type="text/css" href="style/fancybox/jquery.fancybox.css" />
		<link rel="stylesheet" type="text/css" href="style/jquery.qtip.css" />
		<link rel="stylesheet" type="text/css" href="style/jquery-ui-1.9.2.custom.css" />
		<link rel="stylesheet" type="text/css" href="style/style.css" />
		<link rel="stylesheet" type="text/css" href="style/responsive.css" />
		<link rel="stylesheet" type="text/css" href="style/animations.css" />
		<link rel="shortcut icon" href="images/favicon.png" />

		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-bbq.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.carouFredSel-5.6.4-packed.js"></script>
		<script type="text/javascript" src="js/jquery.sliderControl.js"></script>
		<script type="text/javascript" src="js/jquery.timeago.js"></script>
		<script type="text/javascript" src="js/jquery.hint.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.masonry.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
		<script type="text/javascript" src="js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="js/jquery.blockUI.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		<!--js-->
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 <style type="text/css">
            /*SELECT ELEMENT WITH UNICODE SYMBOL: DOWN-ARROW (&#x25bc;)*/
            select
            {
               width                    : 185pt;
               height                   : 40pt;
               line-height              : 40pt;
               padding-right            : 20pt;
               text-indent              : 4pt;
               text-align               : left;
               vertical-align           : middle;
               box-shadow               : inset 0 0 3px #606060;
               border                   : 1px solid #acacac;
               -moz-border-radius       : 6px;
               -webkit-border-radius    : 6px;
               border-radius            : 6px;
               -webkit-appearance       : none;
               -moz-appearance          : none;
               appearance               : none;  /*IMPORTANT*/
               font-family              : Arial,  Calibri, Tahoma, Verdana;
               font-size                : 18pt;
               font-weight              : 500;
               color                    : #000099;
               cursor                   : pointer;
               outline                  : none;
            }
           
         
        </style>
	<body>

	

		
		<div class="site_container" >

	
			<div class="header_container" >

				<div class="header clearfix" >

					<div class="header_left" >

						<a href="index.php" title="Employés" >
						
						<img src="images/rh.jpg" alt="logo" />
							<span class="logo" style="padding-top: 20px" >Entreprise</span>


						</a>
			
					</div>


		

<div >

					<ul class="sf-menu header_right" style="margin-left: 5px; width: 1020px" >

	<li class=" selected">

		<a href="index.php" title="HOME">
			<b>ACCUEIL</b>
		</a>
	
	</li>
	<li>
		<a href="index.php?page=compte" title="compte" >
			<span class="glyphicon glyphicon-user" style="margin-right: 5px"></span><b>COMPTE</b>
		</a>

	</li>

	<li>
		<a href="index.php?page=pointage" title="pointage">
			<span class="	glyphicon glyphicon-ok-sign" style="margin-right: 5px"></span><b>POINTAGE</b>
		</a>
	</li>
	<li>
		<a href="index.php?page=partage" title="pointage">
		<span class="glyphicon glyphicon-duplicate" style="margin-right: 5px"></span><b>	PARTAGES</b>
		</a>
	</li>
	<li >
		<a href="index.php?page=conges" title="congees">
			<span class="	glyphicon glyphicon-calendar" style="margin-right: 5px"></span><b>CONGES</b>
		</a>
	
	</li>

	
	
	

		<li>
		<a href="index.php?page=absences" title="absences">
		<span class="glyphicon glyphicon-dashboard" style="margin-right: 5px"></span>	<b>ABSENCES </b>

			
		</a>
	</li>

		<li>
		<a href="index.php?page=remarques" title="remarque">
				<span class="glyphicon glyphicon-list-alt" style="margin-right: 5px"></span><b>REMARQUES </b>
		</a>
		
	</li>
		
		


	<li>
		<a href="index.php?page=message" title="message">
		<span class="	glyphicon glyphicon-envelope" style="margin-right: 5px"></span><b>	MESSAGES</b> 
		</a>

	</li>

</ul>
<br>
	</div>


	
<div class="mobile_menu">
	<select style="margin-right: 40px; color: blue; font: bold;font-size: 150%" >
		<option value="index.php" selected='selected' >Menu</option>

	    <option value="index.php"><b>Accueil</b></option>
		<option value="index.php?page=conges"><b>Congés</b></option>
		<option value="index.php?page=absences"><b>Absences</b></option>
		<option value="index.php?page=message">Messages</option>
		<option value="index.php?page=remarques">Remarques</option>
		<option value="index.php?page=compte">Mon Compte</option>
		<option value="index.php?page=pointage">Pointage</option>
		<option value="index.php?page=partage">Partage Rapports</option>
		<option value="index.php?page=logout">Déconnecter</option>




		
		
	</select>
</div>				</div>
			</div>
