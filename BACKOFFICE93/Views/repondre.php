	<?php
	
		$message=$admin->getAllmessage();
		
$agents=$admin->getAllAgents();
	
	
	
	if(isset($_POST["titre"],$_POST["message"],$_SESSION['id']) && !isset($_POST['id'])){
	
					

			

		
			
		$admin->addMessage((object)$_POST);
	} 

	
	

	
	
	
		

	




	
	?>
	<head>
	<title>repondre</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
	<div class="main">			
	
		
		<div class="row">
			
		</div><!--/.row-->
				
		
		<div class="row">
			
							   
							    

							    	
							    		
							    	

				<center>			   
<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Repondre
					</span>

					<div class="wrap-input100 validate-input" data-validate = "titre is required">
						<input class="input100" type="text" name="titre" placeholder="titre">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "message is required">
						<input class="input100" type="text" name="message" placeholder="message">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-comment-o" aria-hidden="true"></i>
						</span>
					</div> <br>
					<div>	<select class="form-control " name="agent" >
           	<?php foreach($agents as $a){ ?>
           	<option value="<?= $a->id ; ?>"><?= $a->matricule ?> | <?= $a->nom ?>-<?= $a->prenom ; ?></option>
           	<?php } ?>
           		
           	</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						
						<input type="submit" value="Repondre" class="btn btn-primary" >
					</div>

							    
						 </form></center></div></div>   	
								

						 

						    

					

		




    
            
           
         


     
     
    
     
      

       
     
      
      </div>
   
     
    </div>
  </div>
</div>


</div>






		
		
	</div><!--/.main-->
		
	



