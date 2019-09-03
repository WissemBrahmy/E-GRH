	<?php
	
		$formations=$admin->getformations();
		
		

	
	if(isset(
		$_POST["titre"],
		$_POST["sujet"],
		$_POST["date"]
		,$_SESSION['id'])&& !isset($_POST['id'])){
	
					

			

		
			
		$admin->addformation((object)$_POST);
	} 
	
	


	if(isset($_POST['id'],$_SESSION['id'])){
	
	
					

			

		
			
		$admin->updateformation((object)$_POST);
	} 

	
	

	
	
	if( isset($_GET["action"])&&$_GET["action"]=="annuler" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deleteformation($id);

	}
		

	




	
	?>
	
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
				Formations
					 	
				</h2>
				 <a data-toggle="modal" data-target="#addModal">

                                         <button  class="btn btn-primary" ><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"  > <b> Ajouter</b></span></button>
							    	    </a>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
						<table data-toggle="table" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					 <thead>
						   <tr class=" btn-primary">
						  						      <th data-field="matricule" data-sortable="true">    <CENTER>  listes Des Formations</CENTER> </th>  

						  						        
						  						           
				
						     
						    </tr>
						    </thead>
						    <?php foreach($formations as $form){ ?>
					<tr>
						
						
						  
						        
							   <td style="border-bottom:5pt solid black; background-color: : blue">
                         <CENTER>    <H4> Formation numéro:  <?php echo ($form->id); ?></H4><br>
						  

   
						  <STRONG>Sa sera le: </STRONG>  <?php echo ($form->date); ?> <BR>
						    <STRONG>à propos: </STRONG>  <?php echo ($form->titre); ?><br>
						      <STRONG>Sujet: </STRONG>  <?php echo ($form->sujet); ?>

						 
						    	<br>
							    	<a href="index.php?page=formation&action=annuler&id=<?php echo $form->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous annulez?')) return false;"><span class="glyphicon glyphicon-trash" aria-hidden="true"  ></span></button>
							    	</a>
	
<button  onclick='update(<?php echo json_encode($form); ?>)' class="btn btn-primary" >
							    		
							    		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>	
							    			
							    		</button>

							   </CENTER>
							    

							    	
							    		
							    	
							    	
							    	

							   

							    
						    	
								

						    </td>

						    </td>
						   
						       </tr> 
						     
						   					
								

<!-- Modal -->


						    <?php } ?>  

						  
						</table>
				

			</div>
		</div><!--/.row-->	
</div></div>



<div class="modal fade bs-example-modal-sm" id="addModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
        <form method="post" id="myForm" >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">Ajout formation</h2> 
  </div>
     <div class="modal-body">
          <div class="form-group">
       	<label>date</label>
       	<input type="date" class="form-control" name="date" required="required">
       </div>
             <div class="form-group">
       	<label>titre</label>
       	<input type="text" class="form-control" name="titre" required="required">
       </div>
           <div class="form-group">
       	<label>sujet</label>
       	<textarea class="form-control" name="sujet" required="required"></textarea>
       	
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
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
        <form method="post"  >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">Modifier Formation</h2> 
  </div>
     <div class="modal-body">
     <input type="hidden" name="id" id="id">
                      <div class="form-group">
       	<label>date</label>
       	<input type="date" class="form-control" id="date" name="date" required="required">
       </div>
   
       <div class="form-group">
       	<label>titre</label>
       	<input type="text" class="form-control" id="titre" name="titre" required="required">
       </div>
        <div class="form-group">
       	<label>sujet</label>
       	<textarea class="form-control" id="sujet" name="sujet" required="required"></textarea>
       	
       </div>
          
      
           		
         <div>  
           </div>
           
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
			$("#updateModal #titre").val(data.titre);
			$("#updateModal #sujet").val(data.sujet);
			$("#updateModal #date").val(data.date);
			
		$("#updateModal #id").val(data.id);
			$('#updateModal').modal();


		}
	</script>



