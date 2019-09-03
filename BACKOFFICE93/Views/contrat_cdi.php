	<?php
	
		$agents=$admin->getAllAgentsCDI();
		

	
	

	
	

	


	




	
	?>
	
	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
				Contrats De Travail CDI
					 	
				</h2>



				<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        	     <li>
                                <a href="index.php?page=exagent" class="btn btn-info"><i class=""></i> <span class="network-name">Employés Fin Contrat</span></a>
                            </li>
                                 <li>
                                <a href="index.php?page=contrat_cdi" class="btn btn-info"><i class=""></i> <span class="network-name">Contrats CDI</span></a>
                            </li>
                               <li>
                                <a href="index.php?page=contrat_cdd" class="btn btn-info"><i class=""></i> <span class="network-name">Contrats CDD</span></a>
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
						     <th data-field="photo" data-sortable="true">Photo</th>
						  						  

						  						          <th data-field="cin" data-sortable="true">CIN&Matricule</th>
						  						  
						  						         <th data-field="nom" data-sortable="true">Nom&Prénom</th>
						  						      
						  						             <th data-field="grade" data-sortable="true">Grade</th>
						  						             <th data-field="service" data-sortable="true">Service</th>
				
						        <th>Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($agents as $agent){ ?>
						    <tr>
						      <td> <img src="http:\\localhost/pfa/frontoffice2018/photos/<?php echo $agent->photo; ?>" alt="photo" width="50px" height="50px" /></td>
					

						    <td> <?php echo htmlentities($agent->cin); ?>-<?php echo htmlentities($agent->matricule); ?></td>
						     <td> <?php echo htmlentities($agent->nom); ?>-<?php echo htmlentities($agent->prenom); ?></td>
						    
						             <td> <?php echo htmlentities($agent->grade); ?></td>
						               <td> <?php echo htmlentities($agent->service); ?></td>
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

							<td>
				
							   
							    

							    	
							    	
							    	
							    	   <a onClick="window.open('sal.php?page=cdi&voir=<?php echo $agent->id; ?>','','','')">

                                         <button  class="btn btn-succes" ><span class="glyphicon glyphicon-print" aria-hidden="true"  ></span> <b> Consulter Contrat CDI</b></button>
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







