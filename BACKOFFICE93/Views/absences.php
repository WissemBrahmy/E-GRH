 	<?php
	
		$absences=$admin->getAllAbsences();
		$agents=$admin->getAllAgents();
		

	
	
	
	if(isset($_POST["date"],
		$_POST["heures"],
		$_POST["agent"]
		,$_SESSION['id']) && !isset($_POST['id'])){
	
					

			

		
			
		$admin->addAbsence((object)$_POST);
	
	} 

	if(isset($_POST['id'],$_SESSION['id'])){
	
	
					

			

		
			
		$admin->updateAbsence((object)$_POST);
	} 

	
	

	
	
	if( isset($_GET["action"])&&$_GET["action"]=="delete" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deleteAbsence($id);

	}
		

	




	
	?>
	  <style>
  /* Style the input field */
  #myInput {
    padding: 20px;
    margin-top: -6px;
    border: 0;
    border-radius: 0;
    background: #f1f1f1;
  }
  </style>
  
	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Absences
					 	
				</h2>

					<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        	     <li>
                                <a href="index.php?page=piece_justif" class="btn btn-info"><i class=""></i> <span class="network-name">Pièces Justificatives</span></a>
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
						  						        <th data-field="date" data-sortable="true">date</th>

						  						          <th data-field="heures" data-sortable="true">heures</th>
						  						  
						  						         <th data-field="agent" data-sortable="true">Employé</th>
						  						 
				
						        <th>Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($absences as $agent){ ?>
						    <tr>
						    <td> <?php echo htmlentities($agent->date); ?></td>

						    <td> <?php echo htmlentities($agent->heures); ?></td>
						     <td> <?php echo htmlentities($agent->matricule); ?>|<?php echo htmlentities($agent->nom); ?>-<?php echo htmlentities($agent->prenom); ?></td>
						      
						     
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

							<td>
				
							   
							    

							    	<a href="index.php?page=absences&action=delete&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous Supprimer')) return false;" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							    	</a>

							    	
							    		<button  onclick='update(<?php echo json_encode($agent); ?>)' class="btn btn-primary" >
							    		
							    		<span class="glyphicon glyphicon-edit" aria-hidden="true">	</span>	
							    			
							    		</button>
							    	
							    	
							    	

							   

							    
						    	
								

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
  	<h2 class="modal-title">Ajout Absence</h2> 
  </div>
     <div class="modal-body">
          <div class="form-group">
       	<label>date</label>
       	<input type="date" class="form-control" name="date" required="required">
       </div>
   
       <div class="form-group">
       	<label>heures</label>
       	<input type="text" class="form-control" name="heures" required="required">
       </div>
             <div class="form-group">
           	<select class="form-control"   name="agent">
           	<?php foreach($agents as $a){ ?>
           <option value=" <?= $a->id ; ?>"><?= $a->matricule ?> | <?= $a->nom ?>-<?= $a->prenom ; ?></option>
           	<?php } ?>
           		
           	</select>
           </div>
           
           	



     
     
    
     
      

       
     
      
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirmer" onclick="if(!confirm('Voulez-vous ajouter')) return false;" >
      </div>
      </form>
     
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-sm" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
        <form method="post"  >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">Modifier Absence</h2> 
  </div>
     <div class="modal-body">
     <input type="hidden" name="id" id="id">
                      <div class="form-group">
       	<label>date</label>
       	<input type="date" class="form-control" id="date" name="date" required="required">
       </div>
   
       <div class="form-group">
       	<label>heures</label>
       	<input type="text" class="form-control" id="heures" name="heures" required="required">
       </div>
           <div class="form-group">
           	<select class="form-control" id="agent" name="agent">
           	<?php foreach($agents as $a){ ?>
           	<option value="<?= $a->id ; ?>"><?= $a->matricule ?> | <?= $a->nom ?>-<?= $a->prenom ; ?></option>
           	<?php } ?>
           		
           	</select>
           </div>
           	
                


          
    
         


     
     
    
     
      

       
     
      
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirm" onclick="if(!confirm('Voulez-vous le modifiez	?')) return false;" >
      </div>
      </form>
     
    </div>
  </div>
</div>






		
		
	</div><!--/.main-->
		<script type="text/javascript">

		function update(data) {
			console.log(data);
			$("#updateModal #date").val(data.date);
			$("#updateModal #heures").val(data.heures);
			$("#updateModal #agent").val(data.user_id);
	


			$("#updateModal #id").val(data.id);
			$('#updateModal').modal();



		}
	</script>



