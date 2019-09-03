	<?php
	
		$profils=$admin->getAllprofils();
		$agents=$admin->getAllAgents();

	
	
	
	if(isset($_POST["diplome"],
		$_POST["experience"],
		$_POST["competence"],
		$_POST["stage"]


		,$_SESSION['id']) && !isset($_POST['id'])){
	
					

			

		
			
		$admin->addprofil((object)$_POST);
	} 

	if(isset($_POST['id'],$_SESSION['id'])){
	
	
					

			

		
			
		$admin->updateprofil((object)$_POST);
	} 

	
	

	
	
	if( isset($_GET["action"])&&$_GET["action"]=="delete" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deleteProfil($id);

	}
		

	




	
	?>
	
	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
			Profils	Employés
					 	
				</h2>



				<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                          <li>
                                <a href="index.php?page=agents" class="btn btn-info"><i class=""></i> <span class="network-name">Employés Actifs</span></a>
                            </li> 
                        	     <li>
                                <a href="index.php?page=exagent" class="btn btn-info"><i class=""></i> <span class="network-name">Employés Fin Contrat</span></a>
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
					 <a data-toggle="modal" data-target="#addModal">

                                         <button  class="btn btn-primary" ><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"  > <b> Ajouter</b></span></button>
							    	    </a>
									

						<table data-toggle="table"    data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr class=" btn-primary">
						     <th data-field="photo" data-sortable="true">Photo</th>
						  						  
                             <th data-field="employe" data-sortable="true">Employé</th>
						  						          <th data-field="cin" data-sortable="true">Diplome</th>
						  						  
						  						         
						  						             <th data-field="grade" data-sortable="true">Niveau d'étude</th>
						  						            
						  						             
				
						        <th>Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($profils as $profil){ ?>
						    <tr>
						      <td> <img src="http:\\localhost/pfa/frontoffice2018/photos/<?php echo $profil->photo; ?>" alt="photo" width="50px" height="50px" /></td>
					 <td> <?php echo htmlentities($profil->matricule); ?> | <?php echo htmlentities($profil->nom); ?>-<?php echo htmlentities($profil->prenom); ?></td>
						  

						    <td> <?php echo htmlentities($profil->diplome); ?></td>
						   <td> <?php echo htmlentities($profil->niveau_etude); ?></td>
						           
						   
						   
						  
							    
							

							
							  
							 

								
									
								

							<td>
				
							   
							    

							    	<a href="index.php?page=profil&action=delete&id=<?php echo $profil->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le Retirez?')) return false;"><span class="glyphicon glyphicon-trash" aria-hidden="true"  ></span></button>
							    	</a>
							    		<button  onclick='update(<?php echo json_encode($profil); ?>)' class="btn btn-primary" >
							    	
							    		<span class="glyphicon glyphicon-edit" aria-hidden="true">	</span>	
							    		</button>
							    
							    	
							    	
							    	   <a onClick="window.open('sal.php?page=profil_user&voir=<?php echo  $profil->id; ?>','','','')">

                                         <button  class="btn btn-info" ><span class="glyphicon glyphicon-info-sign" aria-hidden="true"  ></span></button>
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
  <div class="modal-dialog modal-lg">

    <div class="modal-content">
        <form method="post" id="myForm" >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">Ajout Profil</h2> 
  </div>
     <div class="modal-body">



          <div class="form-group">

             <label>Employé*</label>
           	<select class="btn btn-info"  name="agent">
           	<?php foreach($agents as $a){ ?>
           	<option value="<?= $a->id ; ?>"><?= $a->matricule ?> | <?= $a->nom ?>-<?= $a->prenom ; ?></option>
           	<?php } ?>
           		
           	</select>
       	<label>Diplome*</label>
       	<input type="text" class="btn btn-default" name="diplome" required="required" style="padding-left: : : 150px">
       
       	<label>Experiences*</label>
       	<textarea name="experience" required="required" class="btn btn-default"></textarea> 
      <br><br><br>
      <label>Autre Formation*</label>
       	<input type="text"  name="autre_formation" required="required" class="btn btn-default">
      
      &nbsp 	<label>Niveau d'Etude*</label>
      &nbsp 	<input type="text" name="niveau_etude" required="required" class="btn btn-default">
      <br><br>
       	 	  <label>langue*</label>
       	<input type="text"  name="langue" required="required" class="btn btn-default">
    
       	<label>Stage*</label>
       	<TEXTAREA type="text"  name="stage" required="required" class="btn btn-default">
       </TEXTAREA>
       &nbsp &nbsp 	<label>Competences*</label>
       	<textarea type="text"  name="competence" required="required" class="btn btn-default"></textarea>
     <br><br>
        
          
        
       

 
      
       	  	<label>Association*</label>
       	<input type="text"  name="association" required="required" class="btn btn-default">
      
       	
       	<label>Etat civil*</label>
       	<input type="text" name="etat_civil" required="required" class="btn btn-default"> 

       	<br><br>
	<label>Centre_interet*</label>
       	<textarea name="centre_interet" required="required" class="btn btn-default"> 
</textarea>
     
       </div> <BR>
     

    
         


     
     
    
     
      

       
     
      
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirmer" onclick="if(!confirm('Voulez-vous l ajoutez?')) return false;">
      </div>
      </form>
     
    </div>
  </div>
</div>





<div class="modal fade bs-example-modal-sm" id="addModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg">

    <div class="modal-content">
        <form method="post" id="myForm" >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">modif Profil</h2> 
  </div>
     <div class="modal-body">



          <div class="form-group">
<input type="text" name="id" id="id">
             <label>Employé*</label>
           	<select class="btn btn-info"  name="agent" id="agent">
           	<?php foreach($agents as $a){ ?>
           	<option value="<?= $a->id ; ?>"><?= $a->matricule ?> | <?= $a->nom ?>-<?= $a->prenom ; ?></option>
           	<?php } ?>
           		
           	</select>
       	<label>Diplome*</label>
       	<input type="text" class="btn btn-default" name="diplome" required="required" style="padding-left: : : 150px" id="diplome">
       
       	<label>Experiences*</label>
       	<textarea name="experience" required="required" class="btn btn-default"></textarea> 
      <br><br><br>
      <label>Autre Formation*</label>
       	<input type="text"  name="autre_formation" required="required" class="btn btn-default">
      
      &nbsp 	<label>Niveau d'Etude*</label>
      &nbsp 	<input type="text" name="niveau_etude" required="required" class="btn btn-default">
      <br><br>
       	 	  <label>langue*</label>
       	<input type="text"  name="langue" required="required" class="btn btn-default">
    
       	<label>Stage*</label>
       	<TEXTAREA type="text"  name="stage" required="required" class="btn btn-default">
       </TEXTAREA>
       &nbsp &nbsp 	<label>Competences*</label>
       	<textarea type="text"  name="competence" required="required" class="btn btn-default"></textarea>
     <br><br>
        
          
        
       

 
      
       	  	<label>Association*</label>
       	<input type="text"  name="association" required="required" class="btn btn-default">
      
       	
       	<label>Etat civil*</label>
       	<input type="text" name="etat_civil" required="required" class="btn btn-default"> 

       	<br><br>
	<label>Centre_interet*</label>
       	<textarea name="centre_interet" required="required" class="btn btn-default"> 
</textarea>
     
       </div> <BR>
     

    
         


     
     
    
     
      

       
     
      
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirmer" onclick="if(!confirm('Voulez-vous le modif?')) return false;">
      </div>
      </form>
     
    </div>
  </div>
</div>

		
	<!--/.main-->
		<script type="text/javascript">

		function update(data) {
			console.log(data);
			$("#updateModal #diplome").val(data.diplome);
			$("#updateModal #experience").val(data.experience);
			$("#updateModal #langue").val(data.langue;
			$("#updateModal #stage").val(data.stage);
			$("#updateModal #competence").val(data.competence);
			$("#updateModal #centre_interet").val(data.centre_interet);
			$("#updateModal #autre_formation").val(data.autre_formation);
			$("#updateModal #niveau_etude").val(data.niveau_etude);
			$("#updateModal #etat_civil").val(data.etat_civil);
			$("#updateModal #association").val(data.association);
			
			$("#updateModal #agent").val(data.user_id);
	


			$("#updateModal #id").val(data.id);
			$('#updateModal').modal();



		}
	</script>


