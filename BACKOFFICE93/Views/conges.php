	<?php
	
		$conges=$admin->getCongesattente();
		$agents=$admin->getAllAgents();
		

	
	
	
	if(isset($_POST["date_deb"],
		$_POST["date_fin"],
		$_POST["agent"],
		$_POST["attente"],
		$_POST["verif"],
		$_POST["type"]
		,$_SESSION['id']) && !isset($_POST['id'])){
	
					

			

		
			
		$admin->addConges((object)$_POST);
	} 

	if(isset($_POST['id'],$_SESSION['id'])){
	
	
					

			

		
			
		$admin->updateConges((object)$_POST);
	} 

	
	

	
	
		if( isset($_GET["action"])&&$_GET["action"]=="supprimer" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deleteconges($id);

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
	
	
	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Congés En Attentes:
					 	
				</h2>
				<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        	     <li>
                                <a href="index.php?page=conges" class="btn btn-info"><i class=""></i> <span class="network-name">Congés En Attentes</span></a>
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
				<div class="panel panel-default" id="mypanel">

					
					<div class="panel-body">
					

					 <a data-toggle="modal" data-target="#addModal">

                                         <button  class="btn btn-primary" ><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"  > <b> Ajouter</b></span></button>
							    	    </a>
					
								


						<table data-toggle="table"    data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr class=" btn-primary">
						  						        <th data-field="date_deb" data-sortable="true">date_deb</th>

						  						          <th data-field="date_fin" data-sortable="true">date_fin</th>
						  						    <th data-field="type" data-sortable="true">Type</th>
						  						         <th data-field="agent" data-sortable="true">Employé</th>
						  						 
				
						        <th class="hdd">Action</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($conges as $agent){ ?>
						    <tr>
						    <td> <?php echo htmlentities($agent->date_deb); ?></td>

						    <td> <?php echo htmlentities($agent->date_fin); ?></td>
						    <td> <?php echo htmlentities($agent->type); ?></td>
						     <td> <?php echo htmlentities($agent->matricule); ?> | <?php echo htmlentities($agent->nom); ?>-<?php echo htmlentities($agent->prenom); ?></td>
						      
						     
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

							<td class="hdd">
				
							   
							    

							    
							    	<a href="index.php?page=conges&action=refuser&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le Refusez?')) return false;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
							    	</a>
							    	<a href="index.php?page=conges&action=accepter&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-info" onclick="if(!confirm('Voulez-vous le acceptez?')) return false;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
							    	</a>	
							    	
							    	<a href="index.php?page=conges&action=supprimer&id=<?php echo $agent->id ; ?>">
							    		<button class="btn btn-dark" onclick="if(!confirm('Voulez-vous le Retirez?')) return false;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							    	</a>
							    	
							    	     <a onClick="window.open('sal.php?page=detail_cong&voir=<?php echo $agent->user_id; ?>','','','')" class="btn btn-info" ><span class="fa fa-eye" aria-hidden="true"  ></span> Analyse</a>
							
							    		
							    	
							    	
							    	

							   

							    
						    	
								

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
  	<h2 class="modal-title">Ajout Conges</h2> 
  </div>
     <div class="modal-body">
          <div class="form-group">
       	<label>date_deb</label>
       	<input type="date" class="form-control" name="date_deb" required="required">
       </div>
             <div class="form-group">
       	<label>date_fin</label>
       	<input type="date" class="form-control" name="date_fin" required="required">
       </div>
   
    			<label>Type Congé*</label>
           	<select   name="type" class="form-control">
           	
           	<option value="Conge maternite ">	Congé Maternité </option>
           
           		 	<option value="Conge maladie ">Congé Maladie </option>
           		 	<option value=" Conge longue duree "> Congé longue durée </option>
           		 	
           		 		<option value=" Conge paternite"> Congé paternité </option>
           		 			<option value=" Autres "> Autres </option>
           	</select> <br>
             <div class="form-group">
           	<select class="form-control"  name="agent">
           	<?php foreach($agents as $a){ ?>
           	<option value="<?= $a->id ; ?>"><?= $a->matricule ?> | <?= $a->nom ?>-<?= $a->prenom ; ?></option>
           	<?php } ?>
           		
           	</select>
           </div>
           
         


     
     
    
     
      

       
     
      
      </div>
	<input type="hidden" class="form-control" name="verif" value="0" >
        	<input type="hidden" class="form-control" name="attente" value="0" >
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirmer" onclick="if(!confirm('Voulez-vous le Ajoutez?')) return false;">
      </div>
      </form>
     
    </div>
  </div>
</div>






		
		
	
	
		



