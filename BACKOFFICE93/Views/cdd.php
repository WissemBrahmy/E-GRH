<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CONTRAT DE TRAVAIL À DURÉE DETERMINÉE
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


	
	

	
	<center><b style="color: blue;font-size: 30">CONTRAT DE TRAVAIL À DURÉE DETERMINÉE</b>
 </center> 
	

<br>
		
	
	
	<b style="color: black;font-size: 25">

	

	

				<P>ENTRE LES SOUSSIGNES : <br>
 
L’entreprise : E-RH ENTREPRISE 114IN78 CAPITAL 250.000 DT <br>
dont le siège social est situé à : MONASTIR<br>
représentée par Monsieur (ou Madame) : WISSEM BRAHMI<br>
agissant en qualité de : DIRECTEUR RH <BR>

 <b>d'autre part.<b><br> 
 <b>ET</b>
</P>

Monsieur (ou Madame) : &nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?> <br>
demeurant à :  &nbsp <?php echo $agent->adresse ?><br>
né(e) le : &nbsp <?php echo $agent->date_naissance ?> &nbsp  à &nbsp <?php echo $agent->ville ?>. <br>
de nationalité : TUNISIENNE.<br>

<B>D'AUTRE PART,</B><br>

<B>IL A ETE CONVENU CE QUI SUIT :</B><br><br>

<b><u>ARTICLE I : MOTIF (1)</u></b>
<p>Monsieur (ou Madame) &nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?> &nbsp est engagé(e) par l’entreprise dans le cadre de la formation à l’habilitation à la maîtrise d’œuvre en son nom propre – HMO NP
cf. convention tripartite.</p><br><br>
<b><u>ARTICLE II : EMPLOI OCCUPE (2)</u></b><br>

<p>Monsieur (ou Madame)&nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?> &nbsp est employé(e) en qualité d’architecte diplômé d’État, suivant le coefficient hiérarchique 250 (convention collective, minimum 230).
Il (ou elle) aura pour missions  &nbsp <?php echo $agent->grade ?>.
</p> <br><br>
<b><u></u>ARTICLE III : DUREE (3)</u></b><br>

<p>Le présent contrat qui prend effet le&nbsp <?php echo date('y-m-j') ?> &nbsp à &nbsp<?php echo date("H:i:s") ?>&nbsp heures est conclu pour une durée de 2 ANS et prendra fin de plein droit et sans formalité .</p>
<br><br>
<b><u>ARTICLE IV : RENOUVELLEMENT (4)</u></b><br>
<p>Le présent contrat pourra être renouvelé une fois pour une durée qui n'excédera pas 2 ANS de plus. <br>
Dans ce cas, l’entreprise proposera à Monsieur (ou Madame)&nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?> &nbsp. un avenant pour fixer les conditions du renouvellement dans le mois précédant la fin du contrat de travail. 
</p>

<b><u>ARTICLE V : PERIODE D'ESSAI (5)</u></b><br>
<p>Le contrat ne deviendra définitif qu'à l'issue d'une période d'essai de 2 MOIS, au cours de laquelle chacune des parties pourra rompre le contrat sans indemnité.</p>
<b>ARTICLE VI : LIEU DE TRAVAIL</b><br>
<p>Le lieu de travail est situé à MONASTIR</p>

<br><br>
<b><u>ARTICLE VII : DUREE DU TRAVAIL</u></b><br>
<p>
    Les horaires seront les suivants :<br>
- Le lundi de 8H à 17H<br>
- Le mardi de 8H à 17H<br>
- Le mercredi de 8H à 17H<br>
- Le jeudi de 8H à 17H<br>
- Le vendredi de 8H à 14H<br>



</p><br><br>
<b><u>ARTICLE VIII : REMUNERATION </u></b><br>
<p>En contrepartie de ses fonctions, Monsieur (ou Madame) percevra une rémunération brute mensuelle de &nbsp <?php echo $sal->salaire?>&nbsp DINAR  pour un horaire hebdomadaire moyen de 8heures. Elle lui sera versée à la fin de chaque mois civil.

</p><br><br>
<b><u>ARTICLE IX : INDEMNITE DE FIN DE CONTRAT (6)</u></b><br>
<p>A la cessation de ses fonctions dans l’entreprise, Monsieur (ou Madame) &nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?> &nbsp ne percevra pas d’indemnité de fin de contrat. Cette obligation n’est pas requise lorsque l’employeur s’engage dans un complément de formation (cf. code du travail, articles D121-1et L122-2).</p>


<br><br>

<b><u>ARTICLE X : RETRAITE COMPLEMENTAIRE</u></b><br>
<p>Monsieur (ou Madame)&nbsp <?php echo $agent->prenom ?> &nbsp <?php echo $agent->nom ?> &nbspbénéficiera des lois sociales instituées en faveur des salariés notamment en matière de sécurité sociale et en ce qui concerne le régime de retraite complémentaire.<br>
La caisse de retraite complémentaire est................ (indiquer le nom et l'adresse de la caisse de retraite complémentaire et, le cas échéant, de l'organisme de prévoyance).
</p>

<br><br>


<b><u>ARTICLE XI : CONVENTION COLLECTIVE (7)</u></b><br>

<p>Pour toutes les dispositions non prévues par les présentes, les parties déclarent se référer à la convention collective applicable à l'entreprise (cf. CONVENTION COLLECTIVE, articles D2-1et L12-7)</p>


<br><br>

<b><u>ARTICLE XII : RUPTURE ANTICIPEE POUR FAUTE GRAVE OU FORCE MAJEURE</u></b><br>
<p>Chacune des parties se réserve mutuellement le droit de mettre fin au contrat immédiatement en cas de faute grave de l’autre partie ou de force majeure.</p>


<br><br>
Fait en double exemplaire, <br>
A MONASTIR<br>
Le le&nbsp <?php echo date('y-m-j') ?> &nbsp<br>
<b>signature employeur</b> <b style="margin-left: 530px">signature salarié</b> <br>
<b>.............</b><b style="margin-left: 740px">..............</b> <br><br><br>
(Signatures de l'employeur et du salarié précédées de la mention manuscrite "lu et approuvé")










			


	<?php } ?> 



</html>
