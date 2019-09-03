
<?php


	
	$infos=$emp->getcongesaccepteEMP();
	?>
		
	<div class="page relative" style="bottom: 20px; margin-left: 25px" >
	<div class="page_layout page_margin_top clearfix" >
		<div class="page_header clearfix">
			<div class="page_header_left" style="margin-left: 5px">
				
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
						<h5 style="margin-top: 13px">	Congés</h5>
					</li>
				</ul>
			</div>
		
		</div>

	
	
		<div class="container" >
	<?PHP foreach($infos as $info){ ?>
		
		<div class="col-md-5"   style=" word-break: break-all; border:3px solid #D6DBDF  ; margin:10px; background-color: white">
		<h4 ><i style="color: #2874A6"><b>Numéro de congée:</b>&nbsp;</i> <?php echo $info->id; ?></h4>
		<h4 ><i style="color: #2874A6  "><b>date demande:</b>&nbsp;</i> <?php echo $info->date_demande; ?></h4>
		<h4  > <i style="color: #2874A6"><b>Date début:</b>&nbsp;</i><?php echo $info->date_deb; ?></h4>
	
		<H5 ><strong style="color: #E74C3C"> Date fin: </i><?php echo $info->date_fin; ?> </strong></H5>
		
		</div>

			
		
		


		
		<?php } ?>




		</div>
	
	</div>
</div>	
	