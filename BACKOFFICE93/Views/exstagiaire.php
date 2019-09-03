	<?php
	
		$stagiaires=$admin->getstagiaireTermine();
		

	
	
	

	
	

	
	
	if( isset($_GET["action"])&&$_GET["action"]=="delete" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->finsatge($id) ;

	}
		

	




	
	?>
	
	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Stagiaires
					 	
				</h2>
					<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                          
                              <li>
                                <a href="index.php?page=Stagiaire" class="btn btn-info"><i class=""></i> <span class="network-name"> Stages en cours</span></a>
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
						  						        <th data-field="nom" data-sortable="true">Stagiaire</th>
						  						  
						  						   
						  						  <th data-field="CIN" data-sortable="true">CIN&&Matricule</th>
						  						   
						  						      <th data-field="Date_deb" data-sortable="true">Date Début</th>
						  						      <th data-field="Date_fin" data-sortable="true">Date Fin</th>
						  						      <th data-field="Spécialité" data-sortable="true">Spécialité</th>


						     
						        
						       
						      
						        <th>Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($stagiaires as $stagiaire){ ?>
						    <tr>
						     <td> <?php echo htmlentities($stagiaire->nom); ?>-<?php echo htmlentities($stagiaire->prenom); ?></td>
						 
						      <td> <?php echo htmlentities($stagiaire->cin); ?>-<?php echo htmlentities($stagiaire->matricule); ?></td>
						      
						      <td> <?php echo htmlentities($stagiaire->date_deb); ?></td>
						      <td> <?php echo htmlentities($stagiaire->date_fin); ?></td>
						      <td> <?php echo htmlentities($stagiaire->specialite); ?></td>
						      
						   
						  
						  
							    
							

							
							  
							 

								
									
								

							<td>
				
							   
							    

							    	<a href="index.php?page=Stagiaire&action=delete&id=<?php echo $stagiaire->id ; ?>">
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








		
		
	

		<script type="text/javascript">

		function update(data) {
			console.log(data);
		
			$("#updateModal #nom").val(data.nom);
				$("#updateModal #prenom").val(data.prenom);
				$("#updateModal #cin").val(data.cin);
				$("#updateModal #matricule").val(data.matricule);
				$("#updateModal #specialite").val(data.specialite);
				$("#updateModal #mission").val(data.mission);
				$("#updateModal #date_deb").val(data.date_deb);
				$("#updateModal #date_fin").val(data.date_fin);
				$("#updateModal #sexe").val(data.sexe);




			$("#updateModal #id").val(data.id);
			$('#updateModal').modal();



		}
	</script>



