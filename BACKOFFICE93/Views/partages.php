	<?php
	
		$rapports=$admin->getAllrapports();
		$agents=$admin->getAllAgents();
		

	
	
	


	
	

	
	
	if( isset($_GET["action"])&&$_GET["action"]=="delete" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deleterapport($id);

	}
		

	




	
	?>
	
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
				Rapports
					 	
				</h2>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
						<table data-toggle="table" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					 <thead>
						    <tr class=" btn-primary">
						  						        <th data-field="matricule" data-sortable="true"></th>

						  						        
						  						             <th data-field="grade" data-sortable="true"></th>
				
						     
						    </tr>
						    </thead>
						<tr>
						  
						
						  
						        <?php foreach($rapports as $agent){ ?>
						    <td style="border-bottom:5pt solid black;">
                          <H4> Rapport numéro:  <?php echo ($agent->id); ?></H4><br>
						    <H4> Envoyer par:</H4>

   <?php echo htmlentities($agent->nom); ?>-<?php echo htmlentities($agent->prenom); ?>-<?php echo htmlentities($agent->grade); ?> <BR>
						  <STRONG>le: </STRONG>  <?php echo ($agent->date); ?>

						 
						    	
	
							   
							    

							    	
							    		
							    	
							    	
							    	

							   

							    
						    	
								

						    </td>

						    </td>
						    <td style="border-bottom:5pt solid black;"><iframe frameborder="0" width="100%" height="400" src="http:\\localhost/pfa/frontoffice2018/rapports/<?php echo $agent->path ; ?>"> </iframe><a href="index.php?page=partages&action=delete&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le Retirez?')) return false;" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							    	</a></td>

						       </tr>
						     
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

<!-- Modal -->


						    

						    <?php } ?>  

						  
						</table>
				

			</div>
		</div><!--/.row-->	





     
     
    </div>
  </div>
</div>







		
		
	</div><!--/.main-->
	



