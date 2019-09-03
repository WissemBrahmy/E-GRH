
<?php


	
	$infos=$emp->getdeplacementsemp();
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
						<h4>Déplacements</h4>
					</li>
				</ul>
			</div>
		
		</div>

	
	
		<div class="container" style="margin-top:10px; font-family:times;">
	
		
	
			
		
		


  <div class="row">




  <?PHP foreach($infos as $info){ ?>
    <div class="col-sm-5">
      <div class="panel panel-info text-center">
        <div class="panel-heading">
          <h1>Déplacement <?php echo $info->id; ?></h1>
        </div>
        
          
          <p><strong>date:</strong> <?php echo $info->date; ?></p>
       
          <p><strong>lieu:</strong> <?php echo $info->lieu; ?></p>
      
        
          <h3>Prime:<?php echo $info->prime; ?> dinar</h3>



           
   <a onClick="window.open('sal.php?page=ordre_mission&voir=<?php echo $info->id; ?>','','','')">

                                         <button  class="btn btn-info" ><span class="glyphicon glyphicon-tasks" aria-hidden="true"  ></span> Ordre de mission</button>
							    	    </a>


      </div> 



    </div>	


    <?php } ?>
</div>

		
		

</div></div>


		</div>

	</div>
</div>	
	