	<?php
	
		$stagiaires=$admin->getAllstagiaires();
		

	
	
	
	if(isset($_POST["nom"],$_POST["prenom"],$_POST["cin"],$_POST["matricule"],$_POST["specialite"],$_POST["mission"],$_POST["date_deb"],$_POST["date_fin"],$_POST["sexe"],$_SESSION['id']) && !isset($_POST['id'])){
	
					

			

		
			
		$admin->addstagiaire((object)$_POST);
	} 

	if(isset($_POST["nom"],$_POST["prenom"],$_POST["cin"],$_POST["matricule"],$_POST["specialite"],$_POST["mission"],$_POST["date_deb"],$_POST["date_fin"],$_POST["sexe"],$_POST['id'],$_SESSION['id'])){
	
	
					

			

		
			
		$admin->updatestagiaire((object)$_POST);
	} 

	
	

	
	
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
                                <a href="index.php?page=exStagiaire" class="btn btn-info"><i class=""></i> <span class="network-name">Historique Des Stages Terminés</span></a>
                            </li>
                        </ul>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
					<div class="panel-body">
						
 <a data-toggle="modal" data-target="#addModal">

                                         <button  class="btn btn-primary" ><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"  ><b> Ajouter</b></span></button>
							    	    </a>

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
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le Retirez?')) return false;"><span class="fa fa-minus-circle" aria-hidden="true"></span></button>
							    	</a>
							    		<button  onclick='update(<?php echo json_encode($stagiaire); ?>)' class="btn btn-primary" >
							    		
							    		<span class="glyphicon glyphicon-edit" aria-hidden="true">	</span>	
							    		</button>
							    	
							    	   <a onClick="window.open('sal.php?page=attestation_stage&voir=<?php echo  $stagiaire->id; ?>','','','')">

                                         <button  class="btn btn-info" ><span class="glyphicon glyphicon-info-sign" aria-hidden="true"  ></span>Attestation</button>
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




<div class="modal fade bs-example-modal-sm" id="addModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
        <form method="post" id="myForm" >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">Ajout Stagiaires</h2> 
  </div>
     <div class="modal-body">
   
    
       	<label>Nom</label>
       	<input type="text" class="form-control" name="nom" required="required">
       
         	<label>Prénom</label>
       	<input type="text" class="form-control" name="prenom" required="required">
  
         	<label>CIN</label>
       	<input type="text" class="form-control" name="cin" required="required">
      
         	<label>Matricule</label>
       	<input type="text" class="form-control" name="matricule" required="required">
    
         	<label>Spécialité</label>
       	<textarea type="text" class="form-control" name="specialite" required="required"></textarea>
      
       	<label>Mission</label>
       	<textarea type="text" class="form-control" name="mission" required="required"></textarea>
      
          
       	<label>Date début</label>
       	<input type="date" class="form-control" name="date_deb" required="required">
       
        	<label>Date fin</label>
       	<input type="date" class="form-control" name="date_fin" required="required">
      
       
 
          sexe 	<select class="form-control" name="sexe">
         
           	<option value="HOMME">HOMME</option>
           	<option value="FEMME">FEMME</option>
           		
           	</select>
           
         
    
         

     
     
    
     
      

       
     
      
      
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirmer" onclick="if(!confirm('Voulez-vous le ajoutez?')) return false;">
      </div>
      </form>
     
    </div>
  </div>
</div>
</div>

<div class="modal fade bs-example-modal-sm" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
        <form method="post"  >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">Modifier Stagiaire</h2> 
  </div>
     <div class="modal-body">
     <input type="hidden" name="id" id="id">
                      <div class="form-group">
       	<label>Matricule</label>
       	<input type="text" class="form-control" id="matricule" name="matricule" required="required">
       </div>
   
       <div class="form-group">
       	<label>CIN</label>
       	<input type="text" class="form-control" id="cin" name="cin" required="required">
       </div>
           <div class="form-group">
       	<label>Nom</label>
       	<input type="text" class="form-control" id="nom" name="nom" required="required">
       </div>
                <div class="form-group">
       	<label>Prenom</label>
       	<input type="text" class="form-control" id="prenom" name="prenom" required="required">
       </div>
           <div class="form-group">
       	<label>Date Début</label>
       	<input type="date" class="form-control" id="date_deb" name="date_deb" required="required">
       </div>
  <div class="form-group">
       	<label>Date Fin</label>
       	<input type="date" class="form-control" id="date_fin" name="date_fin" required="required">
       </div>

          <div class="form-group">
          Sexe 	<select class="form-control"  name="sexe">
           	
           	<option value="FEMME">FEMME</option>
           
           		 	<option value="HOMME">HOMME</option>
           	</select>
           </div>
        
          <div class="form-group">
       	<label>Mission</label>
       	<input type="text" class="form-control"  id="mission" name="mission" required="required">
       </div>
       
           <div class="form-group">
       	<label>Spécialité</label>
       	<input type="text" class="form-control"  id="specialite" name="specialite" required="required">
       </div>
                
    
         


     
     
    
     
      

       
     
      
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirmer" onclick="if(!confirm('Voulez-vous le Modifiez?')) return false;">
      </div>
      </form>
     
    </div>
  </div>
</div>






		
		
	</div>


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



