
<?php 
		
if(isset($_POST['date_deb'],$_POST['agent'], $_POST['date_fin'], $_POST['attente'], $_POST['verif'], $_POST['type']) ){
	
					

			

		
		$emp->addconges((object)$_POST);
		
	}  ?>


<div class="page relative" style="bottom: 20px; margin-left: 50px">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix" style="padding-bottom:6px;">
			<div class="page_header_left" >
					
				<ul class="bread_crumb">
					<li>
						<a href="index.php" title="Home">
						<h4>	Acceuil</h4>
						</a>
					</li>
					<li class="separator icon_small_arrow right_gray">
						&nbsp;
					</li>
					<li>
							<h5 style="margin-top: 13px">Demander congés</h5>
					</li>
				</ul>
			</div>
		
		</div>
		<div class="clearfix">
			

<div class="btn-group" >

		<a href="index.php?page=conge_attente">
  <button type="button" class="btn btn-info"><b>Congés En Attentes</b></button>
  </a>


<a href="index.php?page=conge_refuse" >
  <button type="button" class="btn btn-info"><b>Congés Refusés</b> </button>
  </a>

 
</div><br> <br>


		
<h3 class="box_header">
						Demande Congé 
					</h3>
					<?php if(isset($error)){
						echo $error;
					}?> <br>
						<form action="" class="contact_form1" id="" method="post" >
						
						
							
							<div class="block">
							<input class="chekbox_input" name="agent" type="hidden" value="<?php echo $_SESSION['id']; ?>" />	</div>
								<div class="block">

							<input class="chekbox_input" name="attente" type="hidden" value="1" />	</div>
								<div class="block">

								<input class="chekbox_input" name="verif" type="hidden" value="1" />	</div>
							<div class="block">
							<strong>Date début:</strong>	<input class="text_input" type="date" name="date_deb" value="" style="margin-left: 30px"/>
							</div>
							
						
							<div class="block">
								<strong>Date fin:</strong>	<input class="text_input" name="date_fin" type="date" value="" style="margin-left: 50px;"/>
							</div>
						<label>Type*</label>
           	<select   name="type" class="btn btn-default">
           	
           	<option value="Conge maternite ">	Congé Maternité </option>
           
           		 	<option value="Conge maladie ">Congé Maladie </option>
           		 	<option value=" Conge longue duree "> Congé longue durée </option>
           		 	
           		 		<option value=" Conge paternite"> Congé paternité </option>
           		 			<option value=" Autres "> Autres </option>
           	</select>

						</fieldset>

					
					    	<input style="  width:150px;height: 35px;margin-right: 400px" type="submit" value="Demander" class="more blue"  onclick="if(!confirm('Voulez-vous confirmez la Demande?')) return false;"/>		
					
					
						
							
							
							
							
					
					</form><br><br>

				</div>
			
			</div>
		
		</div>
	</div>
</div>			