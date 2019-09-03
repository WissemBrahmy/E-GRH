	<?php
	
		$conges=$admin->getCongesrefuse();
		$agents=$admin->getAllAgents();
		

	
	
	
	

	
	
		if( isset($_GET["action"])&&$_GET["action"]=="supprimer" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deleteconges($id);

	}
	
	
	
	?>
	
	
	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Congés Refusés
					 	
				</h2>
<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        	     <li>
                                <a href="index.php?page=conges" class="btn btn-info"><i class=""></i> <span class="network-name">Congés En Attentes</span></a>
                            </li>
                                 <li>
                                <a href="index.php?page=congeA" class="btn btn-info"><i class=""></i> <span class="network-name">Congés Acceptés</span></a>
                            </li>
                                 <li>
                                <a href="index.php?page=congeR"" class="btn btn-info"><i class=""></i> <span class="network-name">Congés Refusés</span></a>
                            </li>
                        </ul>

				
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" id="mypanel">

					
					<div class="panel-body">
				

						<table data-toggle="table"    data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr class=" btn-primary">
						  						        <th data-field="date_deb" data-sortable="true">date_deb</th>

						  						          <th data-field="date_fin" data-sortable="true">date_fin</th>
						  						     <th data-field="type" data-sortable="true">Type</th>
						  						         <th data-field="agent" data-sortable="true">Employé</th>
						  						 
				
						        <th class="hdd">Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($conges as $agent){ ?>
						    <tr>
						    <td> <?php echo htmlentities($agent->date_deb); ?></td>

						    <td> <?php echo htmlentities($agent->date_fin); ?></td>
						    <td> <?php echo htmlentities($agent->type); ?></td>
						     <td> <?php echo htmlentities($agent->matricule); ?> | <?php echo htmlentities($agent->nom); ?>-<?php echo htmlentities($agent->prenom); ?></td>
						      
						     
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

							<td class="hdd">
				
							   
							    

							    
							    	
							    	<a href="index.php?page=conges&action=supprimer&id=<?php echo $agent->id ; ?>">
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






		
		
	</div><!--/.main-->
	



