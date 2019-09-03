

<?php 
		

	
					

			

		
		$avances=$emp->getavancesAccepteEMP();
		
	 ?>
<div class="page relative" style="bottom: 20px; margin-left: 50px">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix" style="padding-bottom:6px;">
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
							<h5 style="margin-top: 13px">Demandes Acceptés</h5>
					</li>
				</ul>
			</div>
		
		</div>
					<div class="clearfix">
	<div class="btn-group">

		<a href="index.php?page=avance_attente">
  <button type="button" class="btn btn-info"><b>Avances En Attentes</b></button>
  </a>



<a href="index.php?page=avance_refuse" >
  <button type="button" class="btn btn-info"><b>Avances Refusés</b> </button>
  </a>

<a href="index.php?page=davances" >
  <button type="button" class="btn btn-info"><b>Demander Avances</b> </button>
  </a>
 
</div><br> <br>

					<h3 class="box_header">
						Demandes Acceptés
					</h3><br>
					<?php if(isset($error)){
						echo $error;
					}?>
						</div>
<div class="row">
	<div class="container" style="margin-top:10px; font-family:times;">
<?PHP foreach($avances as $inf){ ?>
  <div class="col-sm-6 col-md-4" style="right: 25px">
    <div class="thumbnail" style=" word-break: break-all; border:3px solid #E8E8E8; margin:10px;">
      
      <div class="caption">
        
        <h3 style="color: #2874A6">Avance:<?php echo $inf->id; ?></h3>
        <h4>Date:<?php echo $inf->date ?></h4>
        <h4>Montant:<?php echo $inf->montant; ?></h4>
      
        <p><a href="#" class="btn btn-primary" role="button">Voir</a>
     
							    	</p>
      </div>
    </div>
  </div>	<?php } ?>
</div>

		
		




		</div>
				</div>
				
			</div>
		</div>
	</div>
</div>			