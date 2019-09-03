	<?php
	
		$codes=$admin->getcodes();
		
		

	
	

	
	

	
	




	
	?>
	
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
					<div class="panel-body"  style="margin-left: 200px;margin-right: 200px">
					
								
									<button onclick="print()" class="btn-lg btn-primary" >Imprimer</button>
	
<center>
						<table  data-sort-name="name" data-sort-order="desc" border="2">
						    <thead >
						    <tr class=" btn-primary">
						  						        
						  						     
						  						 
				
						        
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($codes as $c){ ?>
						    <tr>
						    <td> 
						    <br>
						      <center><img src="images/code.jpg" alt="logo" width="90" height="30" />
<br>
                      <center><img src="images/rh.jpg" alt="logo" width="40" height="40" />  <BR>
N° SERIE: &nbsp <?php echo ($c->serie); ?> <br>
Tapez le code d'entré: <br>
						    <?php echo ($c->code); ?><br>
Tapez le code de sortie : <br>
						    <?php echo ($c->code_sortie); ?>



						    </center></td>

						  

<!-- Modal -->


						    </tr>  

						    <?php } ?>  

						    </tbody>
						</table></center>
					</div>
				</div>

			</div>
		</div><!--/.row-->	

    
     
      

       
     



     
     
    </div>
  </div>
</div>







		
		
	</div><!--/.main-->
	



