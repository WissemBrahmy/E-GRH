<?php 


	$a=$emp->getAllforum();

if(isset($_POST["titre"],$_POST["sujet"],$_POST['user_id']) ){
	
					

			

		
		$emp->addforum((object)$_POST);

		
	} 

if(isset($_POST["commentaire"],$_POST['agent'],$_POST['forum']) ){

		$emp->addcommentaire((object)$_POST);
}


	 ?>

<div class="page relative" style="bottom: 20px; margin-left: 45px">
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
							<h5 style="margin-top: 13px">Forum</h5>
					</li>
				</ul>
			</div>
	
		</div>
		<div class="clearfix">

			<div class="page_margin_top clearfix">
				<div class="page_left">
				  <?php foreach($a as $a){ ?>
				   <b class="btn-primary" style="size: 20"> &nbsp<?php echo $a->nom; ?> &nbsp a publié: </b>
			
				  <h3>&nbsp<?php echo $a->sujet; ?></h3>

				<b>Commentaires <b><br>
<?php
$x=$a->id;
	$c=$emp->getcommentairebyforum($x);

 foreach($c as $c){ ?>


			</b> &nbsp<b  style="font-style: italic; color: gray;margin-left: 50px"> <?php echo $c->nom; ?>&nbsp<?php echo $c->prenom; ?> <br><div class="alert alert-success" style="margin-right: 90px;margin-left: 50px"> <?php echo $c->commentaire; ?><br>
</b>
<?php echo $c->date; ?>
			</div><br>
				   <?php } ?>
<form class="contact_form1" id="contact_form" method="post">
		<textarea name="commentaire" placeholder="Ecrivez Votre Commentaire" style="width: 450px"></textarea>
<input type="hidden" name="agent" value="<?php echo $_SESSION['id']; ?>" />

<input type="hidden" name="forum" value="<?php echo $a->id; ?>" />

<input style="  width:150px; margin-right:  150px; width: 90px" type="submit"  value="Commenter" class="more blue"  />
</form>   <?php } ?>
					<h3 class="box_header">
						
					</h3>
				</div>
				<div class="page_right">

					<img src="images/d.png" alt="logo" width="180px" height="150px" /><br><br>
					<h3 class="box_header">
					<strong>	Ajouter Un Sujet ici </strong>
					</h3>
					<h3 class="sentence">
						
					</h3>
					<ul class="columns no_padding page_margin_top clearfix">



					
					<form class="contact_form1" id="" method="post" >
						
						<fieldset class="left">
							<label>Titre</label>
							<div class="block">
								<input class="text_input" name="titre" type="text" />
							</div>
							
					
						</fieldset>
						<fieldset style="clear:both;">
							<label>Sujet</label>
							<div class="block" >
								<textarea name="sujet" ></textarea>
							</div></fieldset>
							<fieldset style="clear:both;">
						
							<div class="block"><input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>" /></DIV>
			
							<input style="  width:150px;" type="submit"  value="Envoyer" class="more blue"  />
						</fieldset>
					</form>
					</ul>
		
					<ul class="contact_data page_margin_top">
					
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>			
