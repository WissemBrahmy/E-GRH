<?php 


	$a=$emp->getAllmessage();
		
if(isset($_POST["titre"],$_POST["message"],$_POST['user_id'],$_POST['ag'],$_POST['adm']) ){
	
					

			

		
		$emp->addmessageEmp((object)$_POST);
		
	}  ?>

<div class="page relative" style="bottom: 20px; margin-left: 45px">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix">
			<div class="page_header_left">
			
				<ul class="bread_crumb">
					<li>
						<a href="index.php" title="Home">
						<h4>	Accueil</h4>
						</a>
					</li>
					<li class="separator icon_small_arrow right_gray">
						&nbsp;
					</li>
					<li>
							<h5 style="margin-top: 13px">Messages</h5>
					</li>
				</ul>
			</div>
	
		</div>
		<div class="clearfix">
			<a href="index.php?page=msg_recus" >
  <button type="button" class="btn btn-info"><b>Messages Reçus</b> </button>
  </a>

  	<a href="index.php?page=msg_envoye" >
  <button type="button" class="btn btn-info"><b>Messages Envoyés</b> </button>
  </a>
			<div class="page_margin_top clearfix">
				<div class="page_left">
					<h3 class="box_header">
						Contactez-nous
					</h3>
					
					
					<form class="contact_form1" id="contact_form" method="post" >
						
						<fieldset class="left">
							<label>Titre</label>
							<div class="block">
								<input class="text_input" name="titre" type="text" />
							</div>
							
					
						</fieldset>
						<fieldset style="clear:both;">
							<label>Message</label>
							<div class="block">
								<textarea name="message"></textarea>
							</div></fieldset>
							<fieldset style="clear:both;">
						
							<div class="block"><input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>" /></DIV>
			<div class="block"><input type="hidden" name="ag" value="agent" /></DIV>
			<div class="block"><input type="hidden" name="adm" value="non" /></DIV>
							<input style="  width:150px; margin-right:  310px;" type="submit"  value="Envoyer" class="more blue" onclick="if(!confirm('Voulez-vous vraiment Envoyez ce message?')) return false;" />
						</fieldset>
					</form>
				</div>
				<div class="page_right">
					<img src="images/mu.png" alt="logo" width="180px" height="150px" /><br><br>
					<h3 class="box_header">
					<strong>	RH Entreprise </strong>
					</h3>
					<h3 class="sentence">
						
					</h3>
					<ul class="columns no_padding page_margin_top clearfix">
						<li class="column_left">
							
							Avenue habib bourguiba <br />
							Monastir<br />
							Tunisie
						</li>
						<li class="column_right">
							Telephone: 71 105 657<br />
							Fax: 71 855 154<br />
							
						</li>
					</ul>
					<ul class="contact_data page_margin_top">
					
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>			