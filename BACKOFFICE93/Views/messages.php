	<?php
	
		$message=$admin->getAllmessage();
		

	
	
	
	

	if(isset($_POST["titre"],$_POST["admin"],$_POST["message"],$_POST['id'],$_SESSION['id'])){
	
	
		$admin->addmessageAdmin((object)$_POST);			

			

		
			
		
	} 

	
	

	
	
	if( isset($_GET["action"])&&$_GET["action"]=="delete" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deletemessage($id);

	}
	
	
	?>
	
	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Messages
					 	
				</h2>
			</div>
		</div><!--/.row-->
				
		</div>
	
			

		

				

					
				
								

					
						  

						   
					
			
		<div class="container" >
	  <?php foreach($message as $message){ ?>
		
		<div class="col-md-5"  id="hh"  style=" word-break: break-all; border:1px solid #D6DBDF  ; margin:10px; background-color: #F2F2F2">
		    <H4> Envoyer par:

   <?php echo htmlentities($message->nom); ?>-<?php echo htmlentities($message->prenom); ?>       </H4>                  
		<h4 ><i style="color: #2874A6"><b>Date:</b>&nbsp;</i> <?php echo htmlentities($message->date); ?></h4>
		<h4 ><i style="color: #2874A6  "><b>Titre:</b>&nbsp;</i> <?php echo htmlentities($message->titre); ?></h4>
		<h4  > <i style="color: #2874A6"><b>Message:</b>&nbsp;</i><?php echo htmlentities($message->message); ?></h4>
	
		
			<P>
			
							    	<a href="index.php?page=messages&action=delete&id=<?php echo $message->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le Retirez?')) return false;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							    	</a>
							    
							    		<button  onclick='update(<?php echo json_encode($message); ?>)' class="btn btn-primary" >
							    	<span class="glyphicon glyphicon-share" aria-hidden="true"><b>Repondre</b></span>	
							    			
							    		</button>
							
						    </P>
		</div>

			
		
		


		
		<?php } ?>



<div class="modal fade bs-example-modal-sm" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">

    <div class="modal-content">
        <form method="post"  >
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  	<h2 class="modal-title">Repondre message</h2> 
  </div>
     <div class="modal-body">
     <input type="hidden" name="id" id="id">
      <input type="hidden" name="ag" id="ag" value="non">
                <input type="text" name="admin" id="admin" value="admin" >
   
       <div class="btn-primary">
       	<label>Titre</label>
       	<input type="text" class="form-control" id="titre" name="titre" required="required">
       </div>
         <div class="btn-primary">
       	<label>Message</label>
       	<input type="text" class="form-control" id="message" name="message" required="required">
       </div>
             <div class="form-group">
       	
       	<input type="text" class="form-control" id="agent" name="agent" required="required">
       </div>
           
           
           
           	
                


          
    
         


     
     
    
     
      

       
     
      
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirm" onclick="if(!confirm('Voulez-vous le envoyer	?')) return false;" >
      </div>
      </form>
     
    </div>
  </div>
</div>






		
		
	</div><!--/.main-->
		<script type="text/javascript">

		function update(data) {
			console.log(data);
			$("#updateModal #id").val(data.id);
			$("#updateModal #titre").val(data.titre);
			$("#updateModal #message").val(data.message);
			$("#updateModal #agent").val(data.user_id);
		


			
			$('#updateModal').modal();



		}
	</script>




		</div>
	
		<!--/.row-->	


         
    
         

     
  
<!--/.main-->
	