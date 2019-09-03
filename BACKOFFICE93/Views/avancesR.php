	<?php
	
		$avances=$admin->getavancesrefuse();
		$agents=$admin->getAllAgents();
		

	
	
	


	
	

		if( isset($_GET["action"])&&$_GET["action"]=="supprimer" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deleteavance($id);

	}
	
	
		



	
	?>
	
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Avances Réfusés
					 	
				</h2>

<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        	     <li>
                                <a href="index.php?page=avances" class="btn btn-info"><i class=""></i> <span class="network-name">Damandes En attentes</span></a>
                            </li>
                                 <li>
                                <a href="index.php?page=avancesA" class="btn btn-info"><i class=""></i> <span class="network-name">Demandes accéptés</span></a>
                            </li>
                                 <li>
                                <a href="index.php?page=avancesR"" class="btn btn-info"><i class=""></i> <span class="network-name">Demandes réfusés</span></a>
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

						  						        
						  						   <th data-field="montant" data-sortable="true">Montant</th>
						  						         <th data-field="agent" data-sortable="true">Employé</th>
						  						 
				
						        <th  >Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($avances as $agent){ ?>
						    <tr>
						    <td> <?php echo ($agent->date); ?></td>

						   <td> <?php echo ($agent->montant); ?></td>

						     <td> <?php echo htmlentities($agent->matricule); ?>|<?php echo htmlentities($agent->nom); ?>-<?php echo htmlentities($agent->prenom); ?>-<?php echo htmlentities($agent->grade); ?></td>
						      
						     
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

							<td>
				
							   
							    

							    		
							    	<a href="index.php?page=avances&action=supprimer&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-dark" onclick="if(!confirm('Voulez-vous le Retirez?')) return false;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							    	</a>
							    	
							    	

							   

							    
						    	
								

						    </td>
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

<





		
		
	</div><!--/.main-->
	>



