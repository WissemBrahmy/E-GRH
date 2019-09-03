

<?php 
		
if(isset($_POST['raison'],$_POST['user_id']) ){
	
					

			

		
		$emp->addattestation((object)$_POST);
		
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
							<h5 style="margin-top: 13px">Attestation de présence</h5>
					</li>
				</ul>
			</div>
		
		</div>
		<div class="clearfix">
	<div class="btn-group">

		<a href="sal.php?page=Attestation&voir=<?php echo $_SESSION['id']; ?>">
  <button type="button" class="btn btn-info"><b>Attestation Récu</b></button>
  </a>



 
</div><br> <br>

					<h3 class="box_header">
						Demande Attestation
					</h3><br>
					<?php if(isset($error)){
						echo $error;
					}?>
						<form action="" class="contact_form1" id="" method="post" >
						
						
							
							<div class="block">
							<input class="chekbox_input" name="user_id" type="hidden" value="<?php echo $_SESSION['id']; ?>" />	</div>
							
						
							
						
							<div class="block">
								<strong>RAISON:</strong>	<input class="text_input" name="raison" type="text" value="" style="margin-left: 50px;"/>
							</div>
						
						</fieldset>

					
							
					
					
						<fieldset style="clear:both;">
							
							
							
							<input type="submit" value="Demander" class="more blue" style="margin-right: 400px" onclick="if(!confirm('Voulez-vous confirmez la Demande?')) return false;"/>
						</fieldset>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>			