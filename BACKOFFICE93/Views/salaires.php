 	<?php
	
		$salaire=$admin->getAllSalaire();
		$agents=$admin->getAllAgents();
		

	
	
	
	if(isset($_POST["salaire"],
		$_POST["prime_ancien"],
		$_POST["prime_presence"],
		$_POST["prime_rend"],
		$_POST["prime"],
		$_POST["agent"]
		,$_SESSION['id']) && !isset($_POST['id'])){
	
					

			

		
			
		$admin->addSalaire((object)$_POST);
	} 

	if(isset($_POST['id'],$_SESSION['id'])){
	
	
					

			

		
			
		$admin->updateSalaire((object)$_POST);
	} 

	
	

	
	
	if( isset($_GET["action"])&&$_GET["action"]=="delete" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deleteSalaire($id);

	}
		

	

	if( isset($_GET["action"])&&$_GET["action"]=="affiche" &&isset($_SESSION['id'])){
		
		
		require ("fiche.php");
	

	}
		



	
	?>
	
	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Salaire
					 	
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
						    <thead>
						  <tr class=" btn-primary">
						  						        <th data-field="salaire" data-sortable="true">Salaire</th>

						  						          <th data-field="prime" data-sortable="true">Somme Prime</th>
						  						   
						  						  
						  						         <th data-field="agent" data-sortable="true">Employé</th>
						  						 <th data-field="somme" data-sortable="true">TOTALE</th>
				
						        <th>Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($salaire as $agent){ ?>
						    <tr>
						    <td> <?php echo htmlentities($agent->salaire).'DT'; ?></td>

						    <td> <?php echo htmlentities($b=$agent->prime+ $agent->prime_rend+ $agent->prime_ancien+ $agent->prime_presence).'DT'; ?></td>

						     <td> <?php echo htmlentities($agent->matricule); ?>|<?php echo htmlentities($agent->nom); ?>-<?php echo htmlentities($agent->prenom); ?></td>
						      
						     <?php $a=$agent->salaire + $agent->prime+ $agent->prime_rend+ $agent->prime_ancien+ $agent->prime_presence; ?>
 <td> <?php echo htmlentities($a).'DT'; ?></td>
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

							
				
					<td>		   
							    

							    	<a href="index.php?page=salaires&action=delete&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous Supprimer')) return false;"  ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							    	</a>
							    		<button  onclick='update(<?php echo json_encode($agent); ?>)' class="btn btn-primary" >
							    		
							    		<span class="glyphicon glyphicon-edit" aria-hidden="true">	</span>	
							    		</button>

                         <a onClick="window.open('sal.php?page=fich&voir=<?php echo $agent->user_id; ?>','','width=400','height=400')" class="btn btn-info" ><span class="glyphicon glyphicon-new-window" aria-hidden="true"  ></span> BULLETIN DE SALAIRE</a>
							    	
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
  	<h2 class="modal-title">Ajout salaire</h2> 
  </div>
     <div class="modal-body">
          <div class="form-group">
       	<label>salaire</label>
       	<input type="text" class="form-control" name="salaire" required="required">
       </div>
   
 <div class="form-group">
       	<label>Prime De l'ancienneté</label>
       	<input type="text" class="form-control" name="prime_ancien" >
       </div>


<div class="form-group">
       	<label>Prime De Presence</label>
       	<input type="text" class="form-control"  name="prime_presence" >
       </div>

<div class="form-group">
       	<label>Prime De Rendement</label>
       	<input type="text" class="form-control"  name="prime_rend" >
       </div>


       <div class="form-group">
       	<label>Autres primes</label>
       	<input type="text" class="form-control" name="prime" >
       </div>
             <div class="form-group">
           	<select class="form-control"  name="agent">
           	<?php foreach($agents as $a){ ?>
           	<option value="<?= $a->id ; ?>"><?= $a->matricule ?> | <?= $a->nom ?>-<?= $a->prenom ; ?></option>
           	<?php } ?>
           		
           	</select>
           </div>
           
         


     
     
    
     
      

       
     
      
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirmer" onclick="if(!confirm('Voulez-vous ajoutez')) return false;" >
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
  	<h2 class="modal-title">Modifier salaire</h2> 
  </div>
     <div class="modal-body">
     <input type="hidden" name="id" id="id">
                      <div class="form-group">
       	<label>salaire</label>
       	<input type="text" class="form-control" id="salaire" name="salaire" required="required">
       </div>
   
<div class="form-group">
       	<label>Prime De l'ancienneté</label>
       	<input type="text" class="form-control" id="prime_ancien" name="prime_ancien" required="required">
       </div>


<div class="form-group">
       	<label>Prime De Presence</label>
       	<input type="text" class="form-control" id="prime_presence" name="prime_presence" required="required">
       </div>

<div class="form-group">
       	<label>Prime De Rendement</label>
       	<input type="text" class="form-control" id="prime_rend" name="prime_rend" required="required">
       </div>


       <div class="form-group">
       	<label>Autres primes</label>
       	<input type="text" class="form-control" id="prime" name="prime" required="required">
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
        
        <input type="submit" class="btn btn-primary" value="Confirm" onclick="if(!confirm('Voulez-vous le Modifiez?')) return false;">
      </div>
      </form>
     
    </div>
  </div>
</div>






		
		
	</div><!--/.main-->
		<script type="text/javascript">

		function update(data) {
			console.log(data);
			$("#updateModal #salaire").val(data.salaire);
			$("#updateModal #prime_ancien").val(data.prime_ancien);
			$("#updateModal #prime_presence").val(data.prime_presence);
			$("#updateModal #prime_rend").val(data.prime_rend);
			$("#updateModal #prime").val(data.prime);
			$("#updateModal #agent").val(data.user_id);
	


			$("#updateModal #id").val(data.id);
			$('#updateModal').modal();



		}


	</script>



