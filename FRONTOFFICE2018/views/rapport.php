<?php
	
		

	
	$infos=$emp->getrapportsEMP();
	
		
	
	if( isset($_GET["action"])&&$_GET["action"]=="delete" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$emp->deleterapport($id);

	}


if(isset($_FILES['path'],$_POST['user_id']) ){
$file=$_FILES['path'];
		$name=time().$file['name'];
		move_uploaded_file($file['tmp_name'],"RapportS/".$name);
		$_POST['path']=$name;
	

		
			
		$emp->addRapport((object)$_POST);

	} ?>

<div class="page relative" style="bottom: 20px; margin-left: 25px">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix">
			<div class="page_header_left" style="margin-left: 25px">
				
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
						<h5 style="margin-top: 13px">Partages</h5>
					</li>
				</ul>
			</div>
		
		</div>
		<div class="clearfix">
		
			<div class="page_margin_top clearfix">
				<div class="page_left">
						<a href="index.php?page=partage">
  <button type="button" class="btn btn-info" style="margin-left: 25px"><b>Envoyer des Rapports</b>  </button>
  </a><br><br>
				
					<h3 class="box_header" style="margin-left: 25px">
						Consulter Historique de votre Rapports :
					</h3>
				


<?PHP foreach($infos as $info){ ?>
						<div class="container" >
	
		
		<div class="col-md-3"   style=" word-break: break-all; border:1px solid #D6DBDF  ;  background-color: white; margin-left: 10px;width: 320px">
		<h4 ><i style="color: #2874A6"><b>Rapport Numéro:</b>&nbsp;</i> <?php echo $info->id; ?></h4>
		<h5 ><i style="color: #2874A6  "><b>date d'Envoi:</b>&nbsp;</i> <?php echo $info->date; ?></h5>
	<h4><iframe src="Rapports/<?php echo $info->path; ?>" > </iframe> </h4>
	
	<a href="index.php?page=Rapport&action=delete&id=<?php echo $info->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous vraiment Annulez?')) return false;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							    	</a>

		</div>
		
		


		
		<?php } ?>
</div>
					</div>
				</div>
</div></div>
				 
				
			</div>
		</div>
	</div>
</div>			