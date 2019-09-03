
<?php



	
	$infos=$emp->getnote();




	
	if( isset($_GET["action"])&&$_GET["action"]=="masquer" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$emp->masquerRemarque($id);

	}
	?>
		


<div class="page relative" style="bottom: 20px; margin-left: 30px">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix">
			<div class="page_header_left" >
				
				<ul class="bread_crumb">
					<li>
						<a href="index.php" title="Home" >
						<h4>	Accueil</h4>
						</a>
					</li>
					<li class="separator icon_small_arrow right_gray">
						&nbsp;
					</li>
					<li>
					<h5 style="margin-top: 13px">	Remarques</h5>
					</li>
				</ul>
			</div>
		
		</div>

	
	
		<div class="container"  style="width: 850px;margin-right: 133px">
	<?PHP foreach($infos as $info){ ?>
		
		<div>
		 <strong style="color: #2874A6"> <i style="color: #2874A6"><b>Date:</b>&nbsp;</i><?php echo $info->date; ?><br>
		 <strong><i style="color: #2874A6  "><b>Remarque:</b>&nbsp;</i> <b  text-wrap> <?php echo $info->note; ?></b></strong><br>
		 
	  <p>	<a href="index.php?page=remarques&action=masquer&id=<?php echo $info->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le masquer?')) return false;"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></button>
							    	</a>
     
							    	</p>

		</div>

			
		
		


		
		<?php } ?>




		</div>
	
	</div>
</div>	
	

	