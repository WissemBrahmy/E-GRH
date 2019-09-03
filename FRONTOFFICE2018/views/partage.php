<?php
	
		

	
	$infos=$emp->getcongesAttente();
	
	


if(isset($_FILES['path'],$_POST['user_id']) ){
$file=$_FILES['path'];
		$name=time().$file['name'];
		move_uploaded_file($file['tmp_name'],"RapportS/".$name);
		$_POST['path']=$name;
	

		
			
		$emp->addRapport((object)$_POST);

	} ?>

<div class="page relative" style="bottom: 20px; margin-left: 25px">
	<div class="page_layout page_margin_top clearfix"  style="margin-left: 25px">
		<div class="page_header clearfix" >
			<div class="page_header_left"  style="margin-right: : 30px">
				
				<ul class="bread_crumb">
					<li>
						<a href="index.php" title="Home">
						<h4 style="margin-left: 5px">	Accueil</h4>
						</a>
					</li>
					<li class="separator icon_small_arrow right_gray">
						&nbsp;
					</li>
					<li>
						<h5 style="margin-top: 13px">Partage</h5>
					</li>
				</ul>
			</div>
		
		</div>
		<div class="clearfix">
		
			<div class="page_margin_top clearfix">
				<div class="page_left">
								<a href="index.php?page=rapport">
  <button type="button" class="btn btn-info"><b>Liste des Rapports Envoyés</b> </button>
  </a><br><br>
					
					<h3 class="box_header">
						Partagez votre Rapport:
					</h3>
	


<form class="form-horizontal" method="post" enctype="multipart/form-data"> 
    <div class="form-group">
        <div  style="right: 100px"><br><br>
       

              <input class="btn btn-default" type="file" name="path"  style="width: : 300px;margin-left: 15px"/ ><br><br>
                	<input class="chekbox_input" name="user_id" type="hidden" value="<?php echo $_SESSION['id']; ?>" />
          
        </div>

        	<input  style="  width:150px;height: 35px; margin-left: 15px;" type="submit" class=" more blue"  value="Déposer" onclick="if(!confirm('Voulez-vous vraiment Partagez le Rapport?')) return false;">
    </div>
</form>

					
				</div>

				 
				<div class="page_right">
			
					<img src="images/partage.png" alt="logo" width="300px" height="200px" />
					
				</div>
			</div>
		</div>
	</div>
</div>			