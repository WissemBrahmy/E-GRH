	<?php
	
		$codes=$admin->getcodes();
		
		

	
	
	
if(isset($_POST["code"],$_POST["serie"],$_POST["code_sortie"]
		,$_SESSION['id']) && !isset($_POST['id'])){
	
					

			

		
			
		$admin->addCode((object)$_POST);
	} 

	
	

	
	
	if( isset($_GET["action"])&&$_GET["action"]=="delete" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$admin->deletecode($id);

	}
		

	




	
	?>
	
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<div class="main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Codes Secrets
					 	
				</h2>
					<hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                        	     <a onClick="window.open('sal.php?page=tirage_code','','','')">

                                         <button  class="btn btn-info" ><span class="glyphicon glyphicon-print" aria-hidden="true"  ></span> <b> Imprimer Les Codes</b></button>
							    	    </a>
                               <li>
                                <a href="index.php?page=pointages" class="btn btn-info"><i class=""></i> <span class="network-name">Pointages</span></a>
                            </li>
                        </ul>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					
					<div class="panel-body"  style="margin-left: 200px;margin-right: 200px">
					
								 <a data-toggle="modal" data-target="#addModal">

                                         <button  class="btn btn-primary" ><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"  > <b> Ajouter</b></span></button>
							    	    </a>
	

						<table data-toggle="table"    data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead >
						    <tr class=" btn-primary">
						  						        <th data-field="date" data-sortable="true"  >Code secret</th>

						  						     
						  						 
				
						        
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($codes as $c){ ?>
						    <tr>
						    <td> 

                      <center><img src="images/rh.jpg" alt="logo" width="40" height="40" />  <BR>
N° Serie: &nbsp <?php echo ($c->serie); ?><br>
						   <b class=" btn-primary"> Code Entré <?php echo ($c->code); ?><b>

<br>
<b class=" btn-primary"> Code Sortie <?php echo ($c->code_sortie); ?><b><br>
<a href="index.php?page=codes&action=delete&id=<?php echo $c->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le Retirez?')) return false;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							    	</a>
</center>

						 
						  

						    <?php } ?>
<!-- Modal -->	
  </td>

						    </tr>  
  

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
  	<h2 class="modal-title">Ajout code secret</h2> 
  </div>
     <div class="modal-body">
          <div class="form-group">
       	<label>CODE SECRET ENTRE</label>
       	<input type="text" class="form-control" name="code" required="required">
       </div>
           <div class="form-group">
       	<label>CODE SECRET SORTIE</label>
       	<input type="text" class="form-control" name="code_sortie" required="required">
       </div>
         <div class="form-group">
       	<label>N° SERIE</label>
       	<input type="text" class="form-control" name="serie" required="required">
       </div>
        
    
            
           
         


     
     
    
     
      

       
     
      
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary" value="Confirmer" onclick="if(!confirm('Voulez-vous le Ajoutez?')) return false;">
      </div>
      </form>
     
    </div>
  </div>
</div>



     
     
    </div>
  </div>
</div>







		
		
	</div><!--/.main-->
	
<script>
	function printthis() {
		
		  newWin= window.open("");
   newWin.document.write('<link href="css/bootstrap.min.css" rel="stylesheet"><link href="css/datepicker3.css" rel="stylesheet"><link href="css/styles.css" rel="stylesheet"><link href="css/bootstrap-table.css" rel="stylesheet">   </style> <h3>code</h3>'+$("#hh").html());
  
$(newWin).ready(function(){ 
setTimeout(function() {
	newWin.print();
	 newWin.close();
},200);
});
  

	}

</script>


