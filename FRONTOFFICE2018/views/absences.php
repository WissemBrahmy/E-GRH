
<?php


	
	$infos=$emp->getabsenceemp();

		if( isset($_GET["action"])&&$_GET["action"]=="masquer" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$emp->masquerAbsence($id);

	}
	?>
		
<div class="page relative" style="bottom: 20px; margin-left: 30px">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix">
			<div class="page_header_left" >
				
				<ul class="bread_crumb">
					<li>
						<a href="index.php" title="Home">
							<h4>Accueil</h4>
						</a>
					</li>
					<li class="separator icon_small_arrow right_gray">
						&nbsp;
					</li>
					<li>
						<h5 style="margin-top: 13px">Absences</h5>
					</li>
				</ul>
			</div>
		
		</div>

	
	<div class="page_header_left"  style="margin-right: 0px; ">
	
<a href="index.php?page=piece_justif">
  <button type="button" class="btn btn-info" style="margin-left: 15px"><b>Envoyer un piéce justificative</b> </button>
  </a><br> <br>
<h3 class="box_header">
	
	
		
	
			
		
		
<div class="row">
	<div class="container" style="margin-top:10px; font-family:times;">
<?PHP foreach($infos as $inf){ ?>
  <div class="col-sm-6 col-md-4"  style="right: 10px">
    <div class="thumbnail" style=" word-break: break-all; border:3px solid #E8E8E8; margin:10px;">
      
      <div class="caption">
        
        <h3 style="color: #2874A6">ABSENCES:<?php echo $inf->id; ?></h3>
        <h4>date:<?php echo $inf->date ?></h4>
        <h4>Heurs:<?php echo $inf->heures; ?></h4>
         
        <p><a href="index.php?page=absences&action=masquer&id=<?php echo $inf->id ; ?>">
							    		<button class="btn btn-danger" onclick="if(!confirm('Voulez-vous le masquer?')) return false;"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></button>
							    	</a>
							    	</p>
      </div>
    </div>
  </div>	<?php } ?>
</div>

		
		
</div>



		</div>

	</div>
</div>	
	