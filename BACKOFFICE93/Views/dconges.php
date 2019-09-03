	<?php
	
		$conges=$admin->getcongesAttente();
		$agents=$admin->getAllAgents();
		

	
	
	


	
	

		if( isset($_GET["action"])&&$_GET["action"]=="supprimer" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deleteconge($id);

	}
	
	if( isset($_GET["action"])&&$_GET["action"]=="refuser" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->refuseconge($id);

	}
		

	
if( isset($_GET["action"])&&$_GET["action"]=="accepter" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->accepteconge($id);

	}
		



	
	?>
	
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Demandes En Attentes
					 	
				</h2>

<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        	     <li>
                                <a href="index.php?page=dconges" class="btn btn-info"><i class=""></i> <span class="network-name">Congés En Attentes</span></a>
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
				
							   
							    

							    	<a href="index.php?page=avances&action=refuser&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le Refusez?')) return false;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
							    	</a>
							    	<a href="index.php?page=avances&action=accepter&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-info" onclick="if(!confirm('Voulez-vous le Acceptez?')) return false;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
							    	</a>	
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



