	<?php
	
		$pointages=$admin->getAllpointages();
		$agents=$admin->getAllAgents();
		

	
	
	
if(isset($_POST["code"]
		,$_SESSION['id']) && !isset($_POST['id'])){
	
					

			

		
			
		$admin->addCode((object)$_POST);
	} 

	
	

	
	
	
		

	




	
	?>
	
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Pointages
					 	
				</h2>
				<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        	    
                               <li>
                                <a href="index.php?page=codes" class="btn btn-info"><i class=""></i> <span class="network-name">	Codes Secrets</span></a>
                            </li>
                        </ul>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
					<div class="panel-body">
					
							
	

						<table data-toggle="table"    data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" >
						    <thead >
						    <tr class=" btn-primary">
						  						        <th data-field="date" data-sortable="true"  >Date</th>

						  						         <th data-field="heure" data-sortable="true"  >Heure</th>
						  						  
						  						         <th data-field="agent" data-sortable="true">Employé</th>
						  						 
				
						      
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($pointages as $agent){ ?>
						    <tr>
						    <td> 
                         
						    <?php echo ($agent->datep); ?>
						    	
						    </td>
<td> <?php echo ($agent->heure); ?></td>
						   

						     <td> <?php echo htmlentities($agent->matricule); ?>|<?php echo htmlentities($agent->nom); ?>-<?php echo htmlentities($agent->prenom); ?>-<?php echo htmlentities($agent->grade); ?></td>
						      
						     
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

						
	
<!-- Modal -->


						    </tr>  

						    <?php } ?>  

						    </tbody>
						</table>
					</div>
				</div>

			</div>
		</div><!--/.row-->	



     
     
    </div>
  </div>
</div>







		
		
	</div><!--/.main-->
	



