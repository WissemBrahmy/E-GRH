	<?php
	
		$deplacements=$admin->getAllDeplacements();
		$agents=$admin->getAllAgents();
		

	
	
	
	if(isset(

        $_POST["objet_mission"],
         $_POST["fonction"],
		$_POST["lieu"],
        $_POST["prime"], 
         $_POST["date_depart"],
        $_POST["date_retour"],
       
     
        $_POST["moyen_transport"],
		$_POST["agent"]
		,$_SESSION['id']) && !isset($_POST['id'])){
	
					

			

		
			
		$admin->addDeplacement((object)$_POST);
	} 

	if(isset($_POST['id'],$_SESSION['id'])){
	
	
					

			

		
			
		$admin->updateDeplacement((object)$_POST);
	} 

	
	

	
	
	if( isset($_GET["action"])&&$_GET["action"]=="delete" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deleteDeplacement($id);

	}
		

	




	
	?>
	
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Déplacements
					 	
				</h2>

			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
					<div class="panel-body">
				 <a data-toggle="modal" data-target="#addModal">

                                         <button  class="btn btn-primary" ><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"  > <b> Ajouter</b></span></button>
							    	    </a>	

						<table data-toggle="table"    data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc" >
						    <thead >
						    <tr class=" btn-primary">
						  						        <th data-field="date" data-sortable="true"  >Date</th>

						  						          <th data-field="lieu"" data-sortable="true">Lieu</th>
						  						              <th data-field="prime" data-sortable="true">Prime</th>
						  						  
						  						         <th data-field="agent" data-sortable="true">Employé</th>
						  						 
				
						        <th  >Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($deplacements as $agent){ ?>
						    <tr>
						    <td> <?php echo htmlentities($agent->date); ?></td>

						    <td> <?php echo htmlentities($agent->lieu); ?></td>

						        <td> <?php echo htmlentities($agent->prime); ?></td>

						     <td> <?php echo htmlentities($agent->matricule); ?>|<?php echo htmlentities($agent->nom); ?>-<?php echo htmlentities($agent->prenom); ?>-<?php echo htmlentities($agent->grade); ?></td>
						      
						     
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

							<td>
				
							   
							    

							    	<a href="index.php?page=deplacements&action=delete&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le Retirez?')) return false;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							    	</a>
							    		<button  onclick='update(<?php echo json_encode($agent); ?>)' class="btn btn-primary" >
							    	
							    		<span class="glyphicon glyphicon-edit" aria-hidden="true">	</span>	
							    		</button>
							    	
							
                                <a onClick="window.open('sal.php?page=ordre_mission&voir=<?php echo $agent->id; ?>','','','')">

                                         <button  class="btn btn-info" ><span class="glyphicon glyphicon-tasks" aria-hidden="true"  ></span> Ordre de mission</button>
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

    <div class="modal-content"  >
        <form method="post" id="myForm" style="margin-left: 50px">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">Affecter Déplacement</h2> 
  </div>
     <div class="modal-body">
          <div class="form-group">
       	<label>objet mission*</label>
       	<input type="text" class="btn btn-default" name="objet_mission" required="required" style="padding-left: : : 150px">
       
       	
      	<label>fonction*</label>
       	<textarea name="fonction" required="required" class="btn btn-default"> 
</textarea>
     
      
     <br><br><br>
       	<label>Date de depart*</label>
       	<input type="date"  name="date_depart" required="required" class="btn btn-info">
       	    	<label>Date de Retour*</label>
       	<input type="date"  name="date_retour" required="required" class="btn btn-info"> <br><br>
      <label>moyen de transport*</label>
           	<select   name="moyen_transport" class="btn btn-info">
           	
           	<option value="vehicule personnel">véhicule personnel</option>
           
           		 	<option value="vehicule professionnel">véhicule professionnel</option>
           	</select>
      
       

<label>lieu*</label>
       	<input type="text"  name="lieu" required="required" class="btn btn-default">

      
    <br><br><br>
          	<label>Prime*</label>
       	<input type="text"  name="prime" required="required" class="btn btn-default">
        
<label>Employé*</label>
           	<select class="btn btn-info"  name="agent">
           	<?php foreach($agents as $a){ ?>
           <option value=" <?= $a->id ; ?>"><?= $a->matricule ?> | <?= $a->nom ?>-<?= $a->prenom ; ?></option>
           	<?php } ?>
           		
           	</select>
           </div>

     
     
    
     

       
     
      
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirmer" onclick="if(!confirm('Voulez-vous le Ajoutez?')) return false;">
      </div>
      </form>
     
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-sm" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div  class="modal-dialog modal-lg">

    <div class="modal-content">
        <form method="post"  >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">Modifier Deplacement</h2> 
  </div>
     <div class="modal-body">
     <input type="hidden" name="id" id="id">
                 
       	<label>Date départ</label>
       	<input type="date" class="btn btn-info" id="date_depart" name="date_depart" required="required">
       <br><br>
       	<label>Date retour</label>
       	<input type="date" class="btn btn-info" id="date_retour" name="date_retour" required="required">
     <br><br>
       	<label>Lieu</label>
       	<input type="text" class="btn btn-default" id="lieu" name="lieu" required="required">
      
       	<label>Objet Mission</label>
       	<input type="text" class="btn btn-default" id="objet_mission" name="objet_mission" required="required">
     <br><br>
       	<label>Fonction</label>
       	<textarea type="text" class="btn btn-default" id="fonction" name="fonction" required="required"></textarea>
      
  <label>Moyen de Transport*</label>
           	<select   name="moyen_transport" id="moyen_transport" class="btn btn-info">
           	
           	<option value="vehicule personnel">véhicule personnel</option>
           
           		 	<option value="vehicule professionnel">véhicule professionnel</option>
           	</select>
        <br><br>
      
       	<label>Prime</label>
       	<input type="text" class="btn btn-default" id="prime" name="prime" required="required">
      <br> <br>
      Employé
           	<select class="btn btn-info" id="agent" name="agent">
           	<?php foreach($agents as $a){ ?>
           	<option value="<?= $a->id ; ?>"><?= $a->matricule ?> | <?= $a->nom ?>-<?= $a->prenom ; ?>-<?= $a->grade ; ?></option>
           	<?php } ?>
           		
           	</select>
           </div>
           	
                


          
    
         


     
     
    
     
      

       
     
      
   <br>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirmer" onclick="if(!confirm('Voulez-vous le Modifiez?')) return false;">
      </div>
      </form>
     </div>
    </div>
  </div>
</div>






		
		
	</div><!--/.main-->
		<script type="text/javascript">

		function update(data) {
			console.log(data);
			$("#updateModal #objet_mission").val(data.objet_mission);
			$("#updateModal #fonction").val(data.fonction);
			$("#updateModal #lieu").val(data.lieu);
				$("#updateModal #prime").val(data.prime);
			$("#updateModal #date_retour").val(data.date_retour);
			$("#updateModal #date_depart").val(data.date_depart);
			
			$("#updateModal #moyen_transport").val(data.moyen_transport);
			
			$("#updateModal #agent").val(data.user_id);
	


			$("#updateModal #id").val(data.id);
			$('#updateModal').modal();



		}
	</script>
