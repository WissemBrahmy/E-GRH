
<?php

	if( isset($_GET["action"])&&$_GET["action"]=="delete" &&isset($_SESSION['id'])){
		$id=$_GET["id"];
		
		
	$emp->deletemessage($id);

	}
	

	
	$infos=$emp->getmessageEnvoibyagent();
	?>
		
<div class="page relative" style="bottom: 20px; margin-left: 35px">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix">
			<div class="page_header_left">
			
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
						<h4>Messages Envoyés</h4>
					</li>
				</ul>
			</div>
		
		</div>
	<a href="index.php?page=msg_recus"  style="margin-left: 20px">
  <button type="button" class="btn btn-info"><b>Messages Reçus</b> </button>
  </a>
		<a href="index.php?page=msg_envoye"  style="margin-left: 20px">
  <button type="button" class="btn btn-info"><b>Messages Envoyés</b> </button>
  </a>
  
	<br><br>
		<div class="container" style="margin-top:10px; font-family:times;">
	
		
	
			
		
		


  <div class="row">




  <?PHP foreach($infos as $info){ ?>
    <div class="col-sm-5" style="color: red;" >
      <div class="panel panel-info " style="color: red;">
        <div class="panel-heading" style="background: #33adff">
          <h3 style="color: white">Message &nbsp<?php echo $info->id; ?> &nbsp   <a href="index.php?page=message&action=delete&id=<?php echo $info->id ; ?>">
							    		<button class="btn btn-default" onclick="if(!confirm('Voulez-vous le Retirez?')) return false;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
							    	</a></h3>
        </div>
        
          <div style="margin-left: 10px">
          <p><strong>Date:</strong> <?php echo $info->date; ?><br>
       
          <strong>Titre:</strong> <?php echo $info->titre; ?><br>
      
        
          <strong>Message: </strong><?php echo $info->message; ?> 

</div>

           



      </div> 



    </div>	


    <?php } ?>
</div>

		
		

</div></div>


		</div>

	</div>
</div>	
	