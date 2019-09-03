

<?php


	
	$infos=$emp->getcongesrefuse();


if( isset($_GET["action"])&&$_GET["action"]=="delete" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$emp->deleteconges($id);

	}

	?>


<div class="page relative" style="bottom: 20px; margin-left: 25px">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix" style="padding-bottom:6px;">
			<div class="page_header_left" style="width: 550px">
				
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
							<h5 style="margin-top: 13px">Demandes Refusés</h5>
					</li>
				</ul>
			</div>
		
		</div>
		<div class="clearfix">
			
			<div class="btn-group" style=" margin-left: 20px">



<a href="index.php?page=dconges" >
  <button type="button" class="btn btn-info"><b>Demander Congés</b> </button>
  </a>

 		<a href="index.php?page=conge_attente">
  <button type="button" class="btn btn-info"><b>Congés En Attentes</b></button>
  </a>

</div><br> <br>
<h3 class="box_header" style=" margin-left: 25px">
						Congés   refusés
					</h3>
					<?PHP foreach($infos as $info){ ?>
						<div class="container"  style=" margin-left: 5px">
	
		
		<div class="col-md-6"   style=" word-break: break-all; border:1px solid #D6DBDF  ;  background-color: white">
		<h4 ><i style="color: #2874A6"><b>Numéro de congé:</b>&nbsp;</i> <?php echo $info->id; ?></h4>
		<h4 ><i style="color: #2874A6  "><b>date demande:</b>&nbsp;</i> <?php echo $info->date_demande; ?></h4>
		<h4  > <i style="color: #2874A6"><b>Date début:</b>&nbsp;</i><?php echo $info->date_deb; ?></h4>
	
		<H5 ><strong style="color: #E74C3C"> Date fin: </i><?php echo $info->date_fin; ?> </strong></H5>
		<a href="index.php?page=conge_refuse&action=delete&id=<?php echo $info->id ; ?>">
							    		<button class="btn btn-light" onclick="if(!confirm('Voulez-vous vraiment Annulez?')) return false;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span><b>supprimer<b></button>
							    	</a>
		
		
		
</div>

		
		<?php } ?>


</div>

			</div>

				</div>
			</div>
			</div>
		</div>
	</div>
</div>			