
<?php


	
	$infos=$emp->getformations();

	
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
						<h5 style="margin-top: 13px">Formation</h5>
					</li>
				</ul>
			</div>
		
		</div>

	
	<div class="page_header_left"  style="margin-right: 0px; ">
	

<h3 class="box_header">
	
	
		
	
			
		
		
<div class="row">
	<div class="container" style="margin-top:10px; font-family:times;">
<?PHP foreach($infos as $inf){ ?>
  <div class="col-sm-6 col-md-6"  style="right: 10px">
    <div class="thumbnail" style=" word-break: break-all; border:3px solid #E8E8E8; margin:10px;">
      
      <div class="network-name" style="padding-top: ">
       <center> &nbsp 
        <h3 style="color: #2874A6">&nbsp Formation Numéro:&nbsp <?php echo $inf->id; ?></h3>
        <h4><b>&nbsp sa sera le&nbsp </b><b style="color: red"><?php echo $inf->date ?></b></h4>
        <h4><b >&nbsp Titre:&nbsp </b><?php echo $inf->titre; ?></h4> </center>
          <h4><center> <b>&nbsp Sujet</b></center> <br> &nbsp <?php echo $inf->sujet; ?></h4>
       
      </div>&nbsp 
    </div>
  </div>	<?php } ?>
</div>

		
		
</div>



		</div>

	</div>
</div>	
	