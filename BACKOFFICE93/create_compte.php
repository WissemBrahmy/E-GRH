<?php 
require "config/db.php";
require "Models/DB.php";
require "Models/Back.php";

	use back\Models\backoffice\Back as Back;

	
	
if(isset($_POST["login"],$_POST["cin"],$_POST['nom'],$_POST["prenom"],$_POST['matricule'],$_POST["passwrord"],$_POST['password1']) ){
	
					

			

		
		$admin->addAdmin((object)$_POST);
		
	}  ?>


<style type="text/css">
	
	body {
 font-family:"trebuchet ms",sans-serif;
 font-size:110%;

 }
form {
 background-color:#FFFFFF;
 padding:50px;
 width:380px;
 border:3px solid #C0C0C0;
 }
fieldset {
 padding:0 50px 20px 20px;
 margin-bottom:10px;
 border:1px solid #DF3F3F;
 }
legend {
 color:#DF3F3F;
 font-weight:bold
 }
label {
 margin-top:10px;
 display:block;
 }
label.inline {
 display:inline;
 margin-right:50px;
 }
input, textarea, select, option {
 background-color:#C0C0C0;
 padding-top: 50px;
 padding-bottom: 100px;
 width: 350px;
 }
input, textarea, select {
 padding:3px;
 border:1px solid #C0C0C0;
 border-radius:5px;
 width:200px;
 box-shadow:1px 1px 3px #C0C0C0 inset;
 }
select {
 margin-top:10px;
 }
input[type=radio] {
 background-color:transparent;
 border:none;
 width:10px;
 }
input[type=submit], input[type=reset] {
 width:150px;

 margin-left:5px;
 box-shadow:0px 0px 3px #555;
 cursor:pointer;
 background-color: #5833FF;
 
 font-size: 16px;
 color: #fff;
 font-weight: bold;
 }
</style>


</head>
<body>
	
	
	
		

				<form class="login100-form validate-form" method="post" style="margin-left: 450px" >
				<center>	<h3> <b>
						CREATION COMPTE ADMINISTRATEUR </b></h3></center>
					
<center><img src="images/RH.jpg" alt="logo" width="60px" height="60px" /></center> 

			Login*
					 &nbsp&nbsp &nbsp &nbsp &nbsp	<input  type="text" name="login" placeholder="Login" style="padding-top: 10px;margin-left: 5px">
					<br><br>
					Nom*
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input  type="text" name="nom" placeholder="nom" style="padding-top: 10px;">
					<br><br>
					Prenom*
							&nbsp &nbsp &nbsp <input class="input100" type="text" name="prenom" placeholder="prenom" style="padding-top: 10px; margin-left: 4px">
					<br><br>
					CIN*
							&nbsp &nbsp &nbsp &nbsp 	&nbsp &nbsp &nbsp<input class="input100" type="text" name="cin" placeholder="cin" style="padding-top: 10px;margin-left: 1px">
					<br><br>
					Matricule*
						&nbsp <input class="input100" type="text" name="Matricule" placeholder="Matricule" style="padding-top: 10px;margin-left: 11px">
					<br><br>

	Mot de Passe*
						<input class="input100" type="password" name="password" placeholder="Mot de Passe" style="padding-top: 10px;"> <br>
						<br>
						Repetez Mot de Passe* <br><br>
						<input class="input100" type="password" name="password1" placeholder="Mot de Passe" style="padding-top: 10px;">
						
						<br><br>
						<B><input type="submit" value="Nouveau Compte"  style="padding-top: 10px;"></B>
					
					
				</form>
			</div>
		</div>
	
	
	


