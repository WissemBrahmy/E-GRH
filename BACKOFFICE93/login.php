<?php 
require "config/db.php";
require "Models/DB.php";
require "Models/Back.php";

	use back\Models\backoffice\Back as Back;
if(isset($_POST["login"])){
	

	$admin=new Back();
	$error=$admin->login((object)$_POST);


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Administrateur</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-color: white;background-blend-mode: soft-light;">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/login2.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">
				<center>	<h3> <b>
						ADMINISTRATION </b></h3><center>
					
<center><img src="images/RH.jpg" alt="logo" width="60px" height="60px" /></center> 

					<div class="wrap-input100 validate-input" data-validate = "Valid login is required">
						<input class="input100" type="text" name="login" placeholder="Login">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Mot de Passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						
						<input type="submit" value="Connecter" class="login100-form-btn" >
					</div>

					<div class="text-center p-t-1">
						<span class="txt1">
							Oublier
						</span>
						<a class="txt2" href="#">
							Login / Mot de Passe?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="create_compte.php">
							Créer Nouveau Compte
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<?php if(isset($error)){
	echo $error;

}
?>
</body>
</html>