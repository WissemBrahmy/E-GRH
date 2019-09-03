<?php 
		
$pointages=$emp->getPointageEMP();
		$agents=$emp->getAllAgents();
		


if(isset($_POST["chekin"],$_POST['user_id'],$_POST['code']) ){
	
					

			

		
		$emp->pointage((object)$_POST);
		
	}  ?>
<style type="text/css">
	


input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(3); /* IE */
  -moz-transform: scale(3); /* FF */
  -webkit-transform: scale(3); /* Safari and Chrome */
  -o-transform: scale(3); /* Opera */
  padding-left: 15px;
  margin-right: 20px;
  color: red;
}

/* Might want to wrap a span around your checkbox text */
.checkboxtext
{
  /* Checkbox text */
  font-size: 110%;
  display: inline;
}


</style>

 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">

<link href="css/bootstrap-table.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<div class="page relative" style="bottom: 20px; margin-left: 55px">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix">
			
			
				<ul class="bread_crumb" style="margin-left: : 15px">
					<li>
						<a href="index.php" title="Home">
						<h4 >	Accueil</h4>
						</a>
					</li>
					<li class="separator icon_small_arrow right_gray">
						&nbsp;
					</li>
					<li>
							<h5 style="margin-top: 13px">Pointage Entré</h5>
					</li>
				</ul>
			</div>
		<a href="index.php?page=Pointage_sortie" >
  <button type="button" class="btn btn-info"><b>Sortie</b> </button>
  </a>
		</div>
		<div  >
		
			
				
					<h3 >
						Pointez-nous ici
					</h3>
					
					<form  method="post"  style="padding-right: 50px;width: 200px" class="contact_form1" >
						
						
							
							
								Check-in: <input  name="chekin" type="checkbox" value="1" style="margin-left: 20px" /> <br>
							<input name="user_id" type="hidden" value="<?php echo $_SESSION['id']; ?>"  /> &nbsp &nbsp <br>
<fieldset class="left">
							<label>Tapez Le Code Secret</label>
							<div class="block">
								<input class="text_input" name="code" type="password" value="" />
							</div>
							
					
						</fieldset>

						<br><br>
							<input  style="  width:150px;height: 35px; margin-left: 200px;"  type="submit" class=" more blue"  value="Pointer" onclick="if(!confirm('Voulez-vous vraiment Pointez-nous?')) return false;">
					
						</fieldset>
						<br><br><br><br>
					</form>
				<br><br>


						


				
					
					<BR><br>
					
					<br><br>
									


						<table  class="table table-bordered table-hover" style="margin-top: 150px">

						    <thead >
						    <tr class=" btn-primary"><th><b>DERNIERE POINTAGE </b></th></tr>
						    <tr class=" btn-primary">
						  						        <th data-field="date" data-sortable="true"  ><h4>&nbsp Date</h4></th>

						  						         <th data-field="heure" data-sortable="true"  ><h4>&nbsp Heure</h4></th>
						  						  
						  						        
						  						 
				
						       
						    </tr>
						    </thead>
						    <tbody>
						    <?php foreach($pointages as $agent){ ?>
						    <tr class=" btn-dark">
						    <td> <?php echo ($agent->datep); ?></td>
 <td> <?php echo ($agent->heure); ?></td>
						   

						    
						      
						     
						   
						   
						  
						  
							    
							

							
							  
							 

								
									
								

<!-- Modal -->


						    </tr>  

						    <?php } ?>  

						    </tbody>
						</table></DIV>
					</div>
				</div>
					
				</div  >
				</DIV>
			
					
			
		</div></DIV>
	</div>
</div>			
 <!-- jQuery -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-table.js"></script>