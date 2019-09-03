	<?php
	
		$attestations=$admin->getattestationAttente();
		$agents=$admin->getAllAgents();
		

	
	
	


	
	

		
	

	
	
	if( isset($_GET["action"])&&$_GET["action"]=="refuser" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deleteattestation($id);

	}
		

	
if( isset($_GET["action"])&&$_GET["action"]=="accepter" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->accepteattestation($id);

	}
		



	
	?>
	
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Demandes Attestations
					 	
				</h2>

<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        	  
                                 <li>
                                <a href="index.php?page=attestation_accept" class="btn btn-info"><i class=""></i> <span class="network-name">Demandes accéptés</span></a>
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

						  						        
						  						   <th data-field="montant" data-sortable="true">Raison</th>
						  						         <th data-field="agent" data-sortable="true">Employé</th>
						  						 
				
						        <th  >Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($attestations as $agent){ ?>
						    <tr>
						    <td> <?php echo ($agent->date); ?></td>

						   <td> <?php echo ($agent->raison); ?></td>

						     <td> <?php echo htmlentities($agent->matricule); ?>|<?php echo htmlentities($agent->nom); ?>-<?php echo htmlentities($agent->prenom); ?>-<?php echo htmlentities($agent->grade); ?></td>
						      
						     
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

							<td>
				
							   
							    

							    	<a href="index.php?page=attestation&action=refuser&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le Refusez?')) return false;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
							    	</a>
							    	<a href="index.php?page=attestation&action=accepter&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-info" onclick="if(!confirm('Voulez-vous le acceptez?')) return false;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
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



