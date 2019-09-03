

<?php 
		
if(isset($_POST['montant'],$_POST['user_id']) ){
	
					

			

		
		$emp->addavance((object)$_POST);
		
	}  ?>

<div class="page relative" style="bottom: 20px; margin-left: 50px">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix" style="padding-bottom:6px;">
			<div class="page_header_left">
					
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
							<h5 style="margin-top: 13px">Demande Avance</h5>
					</li>
				</ul>
			</div>
		
		</div>
		<div class="clearfix">
	<div class="btn-group">

		<a href="index.php?page=avance_attente">
  <button type="button" class="btn btn-info"><b>Avances En Attentes</b></button>
  </a>


<a href="index.php?page=avance_accepte" >
  <button type="button" class="btn btn-info"><b>Avances Acceptés</b> </button>
  </a>
<a href="index.php?page=avance_refuse" >
  <button type="button" class="btn btn-info"><b>Avances Refusés</b> </button>
  </a>


 
</div><br> <br>

					<h3 class="box_header">
						Demander Avances
					</h3><br>
					<?php if(isset($error)){
						echo $error;
					}?>
						<form action="" class="contact_form1" id="" method="post" >
						
						
							
							<div class="block">
							<input class="chekbox_input" name="user_id" type="hidden" value="<?php echo $_SESSION['id']; ?>" />	</div>
							
						
							
						
							<div class="block">
								<strong>Montant:</strong>	<input class="text_input" name="montant" type="text" value="" style="margin-left: 50px;"/>
							</div>
						
						</fieldset>

					
							
					
					
						<fieldset style="clear:both;margin-right: 310px">
							
							
							
							<input style="  width:150px;height: 35px; "  type="submit" value="Demander" class="more blue" style="margin-right: 400px" onclick="if(!confirm('Voulez-vous confirmez la Demande?')) return false;"/>
						</fieldset>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>			