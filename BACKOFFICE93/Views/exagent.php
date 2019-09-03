	<?php
	
		$agents=$admin->getAllxAgents();
		

	
	
	
	if(isset($_POST["matricule"],
		$_POST["nom"],
		$_POST["prenom"],
		$_POST["cin"]

		,$_SESSION['id']) && !isset($_POST['id'])){
	
					

			

		
			
		$admin->addAgent((object)$_POST);
	} 

	if(isset($_POST['id'],$_SESSION['id'])){
	
	
					

			

		
			
		$admin->updateAgent((object)$_POST);
	} 

	
	

	
	
	if( isset($_GET["action"])&&$_GET["action"]=="delete" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deleteexAgent($id);

	}
		

	




	
	?>
	
	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Employés fin Contrat
					 	
				</h2>
				<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        	     <li>
                                <a href="index.php?page=agents" class="btn btn-info"><i class=""></i> <span class="network-name">Employés Actifs</span></a>
                            </li>
                               <li>
                                <a href="index.php?page=contrat_cdi" class="btn btn-info"><i class=""></i> <span class="network-name">Contrats</span></a>
                            </li> 
                        </ul>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
					<div class="panel-body">
					
									

						<table data-toggle="table"    data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr class=" btn-primary">
						  						        <th data-field="matricule" data-sortable="true">Matricule</th>

						  						          <th data-field="cin" data-sortable="true">CIN</th>
						  						  
						  						         <th data-field="nom" data-sortable="true">Nom</th>
						  						         <th data-field="prenom" data-sortable="true">Prenom</th>
						  						         
						  						          <th data-field="sexe" data-sortable="true">Sexe</th>
						  						           <th data-field="service" data-sortable="true">Service</th>
						  						           <th data-field="gsm" data-sortable="true">Gsm</th>
						  						             <th data-field="grade" data-sortable="true">Grade</th>
				
						        <th>Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($agents as $agent){ ?>
						    <tr>
						    <td> <?php echo htmlentities($agent->matricule); ?></td>

						    <td> <?php echo htmlentities($agent->cin); ?></td>
						     <td> <?php echo htmlentities($agent->nom); ?></td>
						      <td> <?php echo htmlentities($agent->prenom); ?></td>
						           <td> <?php echo htmlentities($agent->sexe); ?></td>
						       <td> <?php echo htmlentities($agent->service); ?></td>
						    
						           <td> <?php echo htmlentities($agent->tel); ?></td>
						             <td> <?php echo htmlentities($agent->grade); ?></td>
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

							<td>
				
							   
							    

							    	<a href="index.php?page=exagent&action=delete&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le Retirez?')) return false;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
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
	

