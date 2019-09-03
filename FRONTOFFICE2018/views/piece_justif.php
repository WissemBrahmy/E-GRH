<?php
	
		

	

	
	


if(isset($_FILES['path'],$_POST['user_id'],$_POST['date_absence']) ){
$file=$_FILES['path'];
		$name=time().$file['name'];
		move_uploaded_file($file['tmp_name'],"pieces_justification/".$name);
		$_POST['path']=$name;
	

		
			
		$emp->addpiece((object)$_POST);

	} ?>
<style type="text/css">
	


</style>
<div class="page relative" style="bottom: 20px; margin-left: 50px">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix">
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
						<h5 style="margin-top: 13px">Partage</h5>
					</li>
				</ul>
			</div>
		
		</div>
		<div class="clearfix">
		
			<div class="page_margin_top clearfix">
				<div class="page_left">
								<a href="index.php?page=absences">
  <button type="button" class="btn btn-info"><b>Liste des Absences</b> </button>
  </a><br><br>
					
					<h3 class="box_header">
						Envoyer votre piéce de justification ici:
					</h3>
	


<form class="form-horizontal" method="post" enctype="multipart/form-data" style="margin-right: 650px"> 
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" style=""><br><br>
          

              <input class="btn btn-info" type="file" name="path"  / ><br><br>
              <b>Date</b>
               <input   type="date" name="date_absence"  style="width : 150px; height: 35px; border-color: gray"/ ><br><br>
                	<input class="chekbox_input" name="user_id" type="hidden" value="<?php echo $_SESSION['id']; ?>" />
        
        </div>
<br><br><br><p></p>
        	<input  style="  width:100px; margin-left: 20px;" type="submit" class=" more blue"  value="Envoyer" onclick="if(!confirm('Voulez-vous vraiment envoyez cette piéce?')) return false;">
    </div>
</form>

					
				</div>

				 
				<div class="page_right">
			
					<img src="images/j.png" alt="logo" width="200px" height="200px" />
					
				</div>
			</div>
		</div>
	</div>
</div>			