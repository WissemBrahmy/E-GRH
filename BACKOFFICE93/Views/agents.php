	<?php
	
		$agents=$admin->getAllAgents();
		

	
	
	
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
		
		
	$admin->deleteAgent($id);

	}
		

	




	
	?>
	
	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
				Employés
					 	
				</h2>


				<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                          <li>
                                <a href="index.php?page=profil" class="btn btn-info"><i class=""></i> <span class="network-name">Profils Employés</span></a>
                            </li> 
                        	     <li>
                                <a href="index.php?page=exagent" class="btn btn-info"><i class=""></i> <span class="network-name">Employés Fin Contrat</span></a>
                            </li>
                               <li>
                                <a href="index.php?page=contrat_cdi" class="btn btn-info"><i class=""></i> <span class="network-name">Contrats</span></a>
                            </li> 
                              <li>
                                <a href="index.php?page=Stagiaire" class="btn btn-info"><i class=""></i> <span class="network-name">Stagiaires</span></a>
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
						  						  

						  						          <th data-field="cin" data-sortable="true">CIN</th>
						  						  
						  						         <th data-field="nom" data-sortable="true">Nom</th>
						  						         <th data-field="prenom" data-sortable="true">Prenom</th>
						  						          <th data-field="date naissance" data-sortable="true">Date Naissance</th>
						  						      
						  						                 <th data-field="adresse" data-sortable="true">Adresse</th>
						  						           <th data-field="tel" data-sortable="true">GSM</th>
						  						             <th data-field="grade" data-sortable="true">Grade</th>
						  						             <th data-field="service" data-sortable="true">Service</th>
				
						        <th>Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($agents as $agent){ ?>
						    <tr>
						      <td> <img src="http:\\localhost/pfa/frontoffice2018/photos/<?php echo $agent->photo; ?>" alt="photo" width="50px" height="50px" /></td>
					

						    <td> <?php echo htmlentities($agent->cin); ?></td>
						     <td> <?php echo htmlentities($agent->nom); ?></td>
						      <td> <?php echo htmlentities($agent->prenom); ?></td>
						       <td> <?php echo htmlentities($agent->date_naissance); ?></td>
						      
						            <td> <?php echo htmlentities($agent->adresse); ?></td>
						           <td> <?php echo htmlentities($agent->tel); ?></td>
						             <td> <?php echo htmlentities($agent->grade); ?></td>
						               <td> <?php echo htmlentities($agent->service); ?></td>
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

							<td>
				
							   
							    

							    	<a href="index.php?page=agents&action=delete&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le Retirez?')) return false;"><span class="fa fa-minus-circle" aria-hidden="true"  ></span></button>
							    	</a>
							    		<button  onclick='update(<?php echo json_encode($agent); ?>)' class="btn btn-primary" >
							    		
							    		<span class="glyphicon glyphicon-edit" aria-hidden="true">	</span>	
							    			
							    		</button>
							    	
							    	   <a onClick="window.open('sal.php?page=detail_emp&voir=<?php echo  $agent->id; ?>','','','')">

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
  	<h2 class="modal-title">Ajout Employé</h2> 
  </div>
     <div class="modal-body">
          <div class="form-group">
       	<label>Matricule*</label>
       	<input type="text" class="btn btn-default" name="matricule" required="required" style="padding-left: : : 150px">
       
       &nbsp	&nbsp<label>CIN*</label>
       	 &nbsp &nbsp  &nbsp <input type="text"  name="cin" required="required" class="btn btn-default" size="17">
      
        &nbsp &nbsp	 	&nbsp &nbsp     <label>Nom*</label>
       	 &nbsp &nbsp  &nbsp &nbsp  <input type="text"  name="nom" required="required" class="btn btn-default" size="10">
     <br><br>
       	<label>Prenom*</label>
       &nbsp	<input type="text"  name="prenom" required="required" class="btn btn-default">
       
       &nbsp &nbsp 	<label>Date N*</label>
       	<input type="date"  name="date_naissance" required="required" class="btn btn-info">
      &nbsp &nbsp &nbsp &nbsp <label>Sexe*</label>
           	&nbsp &nbsp &nbsp  &nbsp &nbsp<select   name="sexe" class="btn btn-info" style="padding-right: 35px">
           	
           	<option value="FEMME">FEMME</option>
           
           		 	<option value="HOMME">HOMME</option>
           	</select>
        <br><br>
       	<label>Adresse*</label>
       &nbsp	<textarea name="adresse" required="required" class="btn btn-default"> 
</textarea>
 &nbsp &nbsp &nbsp &nbsp  <label>Ville*</label>
       	 &nbsp <input type="text"  name="ville" required="required" class="btn btn-default" size="17">
  &nbsp &nbsp &nbsp &nbsp  &nbsp <label>Service*</label>
           &nbsp &nbsp	<select   name="service" class="btn btn-info">
           	
           	<option value="Informatique">Informatique</option>
           
           		 	<option value="Electrique">Electrique</option>
           		 	<option value="Administratif">Administratif</option>
           	</select>
      <br><br>
       	<label>Gsm*</label>
       	 &nbsp &nbsp  &nbsp &nbsp<input type="text"  name="tel" required="required" class="btn btn-default">
      
      &nbsp &nbsp &nbsp	<label>Grade*</label>
      	<input type="text" name="grade" required="required" class="btn btn-default" size="16">
      <br><br>
       	<label>Fonction*</label>
       	<textarea name="fonction" required="required" class="btn btn-default"> 
</textarea>
       	<br><br>

       	  	<label>Login*</label>
        &nbsp &nbsp &nbsp	<input type="text"  name="login" required="required" class="btn btn-default">
      
       	&nbsp &nbsp  <label>Mot de passe*</label>
       	&nbsp &nbsp<input type="password" name="password" required="required" class="btn btn-default">
       
       <label>Type Contrat*</label>
           	<select   name="contrat" class="btn btn-info">
           	
           	<option value="CDD">CDD</option>
           
           		 	<option value="CDI">CDI</option>
           	</select>
          

    
         
</div>

     
     
    
     
      

       
     
      
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirmer" onclick="if(!confirm('Voulez-vous l ajoutez?')) return false;">
      </div>
      </form>
     
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-sm" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg">

    <div class="modal-content">
        <form method="post"  >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">Modifier Employé</h2> 
  </div>
     <div class="modal-body">
     <input type="hidden" name="id" id="id">
     
                     
       	<label>Matricule</label>
       	<input type="text" class="btn btn-default" id="matricule" name="matricule" required="required">
      
       	<label>CIN</label>
       	<input type="text" class="btn btn-default" id="cin" name="cin" required="required">
     
       	&nbsp &nbsp&nbsp &nbsp<label>Nom</label>
      &nbsp &nbsp 	&nbsp &nbsp <input type="text" class="btn btn-default" id="nom" name="nom" required="required">
     <BR><BR>
       	<label>Prenom</label>
       &nbsp <input type="text" class="btn btn-default" id="prenom" name="prenom" required="required">
    
       	<label>Date N</label>
       	<input type="date" class="btn btn-default" id="date_naissance" name="date_naissance" required="required">
   
        &nbsp &nbsp &nbsp &nbsp Sexe  	&nbsp &nbsp	&nbsp &nbsp<select class="btn btn-info" id="sexe" name="sexe" >
           	
          <option value="FEMME">FEMME</option>
           
           	<option value="HOMME">HOMME</option>
           	</select>
           <BR><BR>
       	<label>Adresse</label>
       	&nbsp <input type="text" class="btn btn-default" id="adresse" name="adresse" required="required">

      
       	<label>Ville</label>
       	<input type="text" class="btn btn-default"  id="ville" name="ville" required="required">
      
       &nbsp &nbsp  <label>Service*</label>
           	&nbsp &nbsp <select   name="service" id="service" class="btn btn-info">
           	
           	<option value="Informatique">Informatique</option>
           
           		 	<option value="Electrique">Electrique</option>
           		 	<option value="Administratif">Administratif</option>
           	</select>
         <BR><BR>
       	GSM
       &nbsp &nbsp &nbsp &nbsp	<input type="text" class="btn btn-default"  id="tel" name="tel" required="required">
     
       	Grade
       	<input type="text" class="btn btn-default"  id="grade" name="grade" required="required">
     
     &nbsp &nbsp  Fonction*
       	<textarea name="fonction"  id="fonction" required="required" class="btn btn-default"  > 
</textarea>
<BR><BR>
       	Login
       	&nbsp &nbsp &nbsp &nbsp<input type="text" class="btn btn-default"  id="login" name="login" required="required">
      
       	Mot de passe
       	<input type="password" class="btn btn-default"  id="password" name="password" required="required">
      
          
    
         


     
     
    
     
      

       
     
      
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirmer" onclick="if(!confirm('Voulez-vous le Modifiez?')) return false;">
      </div>
      </form>
     
    </div>
  </div>
</div>






		
		
	</div><!--/.main-->
		<script type="text/javascript">

		function update(data) {
			console.log(data);
			$("#updateModal #cin").val(data.cin);
			$("#updateModal #nom").val(data.nom);
			$("#updateModal #prenom").val(data.prenom);
			$("#updateModal #sexe").val(data.sexe);
			$("#updateModal #tel").val(data.tel);
				$("#updateModal #adresse").val(data.adresse);
				$("#updateModal #ville").val(data.ville);
			$("#updateModal #grade").val(data.grade);
			$("#updateModal #fonction").val(data.fonction);
			$("#updateModal #date_naissance").val(data.date_naissance);
			$("#updateModal #matricule").val(data.matricule);
$("#updateModal #login").val(data.login);
$("#updateModal #password").val(data.password);

			$("#updateModal #id").val(data.id);
			$('#updateModal').modal();



		}
	</script>



