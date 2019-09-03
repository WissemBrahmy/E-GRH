
<?php



if(isset($_POST['tel'],$_POST['adresse'])){




	$emp->updateemp($_SESSION['id'],$_POST['tel'],$_POST['adresse']);

		
}






if(isset($_FILES['photo'],$_POST['user_id']) ){
$file=$_FILES['photo'];
		$name=time().$file['name'];
		move_uploaded_file($file['tmp_name'],"photos/".$name);
		$_POST['photo']=$name;
	

		
			
		$emp->updatephoto($_SESSION['id'],$_POST['photo']);

	} ?>

<script>
$(document).ready(function(){
	$("#change").click(function(){
		$("#don").hide();
		$("#form").show();



	});
	




});

$(document).ready(function(){
	$("#ch").click(function(){
		$("#done").hide();
		$("#for").show();



	});
	




});

</script>

<div class="page relative" style="bottom: 20px; margin-left: 45px">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix" style="padding-bottom:1px;">
			<div class="page_header_left"  style="   margin-right: 230px; width: 200px">
				
				<ul class="bread_crumb" style="margin-left: 0px"> 
					<li>
						<a href="index.php" title="Home">
						<h4 >	Acceuil</h4>
						</a>
					</li>
					<li class="separator icon_small_arrow right_gray">
						&nbsp;
					</li>
					<li>
						<h5 style="margin-top: 13px"><?php echo $_SESSION['nom']; ?></h5>
					</li>
				</ul>
			</div>
			<div class="page_header_right" style="margin-right: 15px">
	<a href="index.php?page=Dconges" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Demande congé</a>
<a href="index.php?page=Davances" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Demande avance</a>

	<a href="index.php?page=Deplacements" class=" btn btn-default btn-lg active" role="button" aria-pressed="true">Déplacements</a>
<a href="index.php?page=attestation_p" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Attestation de présence</a>
	<a href="index.php?page=Formations" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Formations</a>
<a onClick="window.open('sal.php?page=profil','','','')" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Mon Profil</a>

			</div>
		
		</div>
		<div class="clearfix">
			
			<div class="page_margin_top clearfix">
				<div class="page_left">
					<h3 class="box_header" style="margin-left: 15px">
						Bonjour <?php echo $_SESSION['nom'];  ?>
					</h3>
					<?php if(isset($error)){
						echo $error;
					}?>
<div  id="don"style="margin-top:20px; position:relative; font-size:16px;"	>				
<table class="" border='0' width="400px" height="200px" style="right: 20px">
<tr>
<th><strong> MATRICULE:</strong></th>
<td> <?php echo $_SESSION['matricule']; ?> </td>
</tr>
<tr>
<th><strong> NOM:</strong></th>
<td> <?php echo $_SESSION['nom']; ?> </td>
</tr>
<tr>
<th><strong> PRENOM: </strong></th> <td> <?php @print($_SESSION['prenom']);?></td></tr>
<tr>
<th><strong> CIN: </strong></th> <td> <?php @print( $_SESSION['cin']); ?></td></tr>
<tr>
<th><strong> GSM: </strong></th> <td> <?php echo $_SESSION['tel']; ?></td></tr>
<tr>
<th><strong> DATE NAISSANCE: </strong></th> <td> <?php echo $_SESSION['date_naissance']; ?></td></tr>
<th><strong > GRADE: </strong></th> <td> <?php echo $_SESSION['grade']; ?></td></tr>
<th><strong > FONCTION: </th> <td> <?php echo $_SESSION['fonction']; ?></td></tr>
<th><strong> SEXE: </strong></th> <td> <?php echo $_SESSION['sexe']; ?></td></tr>
<th><strong> ADRESSE: </strong></th> <td> <?php echo $_SESSION['adresse']; ?></td></tr>
<th><strong> SERVICE: </strong></th> <td> <?php echo $_SESSION['service']; ?></td></tr>
<th><strong> TYPE CONTRAT: </strong></th> <td> <?php echo $_SESSION['contrat']; ?></td></tr>
</table>


<br>
<button class=" more blue" id="change" >Actualiser mes informations </button>

<br><br>
	

	
</div>




<div id="form" style=" display:none;margin-top:10px; position:relative; font-size:16px;"	>
<form action="" class="contact_form1" id="" method="post" >				
<table border='0' width="400px" height="200px">
<th><strong> MATRICULE : </strong></th> <td> <input type="text" value="<?php echo $_SESSION['matricule']; ?>" name="matricule" disabled="disabled"></td></tr>
<tr>
<th><strong> NOM :</strong></th>
<td><input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>" disabled="disabled"> </td>
</tr>
<tr>
<th><strong> PRENOM : </strong></th> <td> <input type="text" value="<?php echo $_SESSION['prenom']; ?>" name="prenom" disabled="disabled"></td></tr>
<th><strong> CIN : </strong></th> <td> <input type="text" value="<?php echo $_SESSION['cin']; ?>" name="cin" disabled="disabled"></td></tr>

<tr>
<th><strong> GSM: </strong></th> <td> <input style="color: red; " type="text" name="tel" value="<?php echo $_SESSION['tel']; ?>" ></td></tr>
<tr>
<th><strong> ADRESSE : </strong></th> <td> <input style="color: red; " type="text" name="adresse" value="<?php echo $_SESSION['adresse']; ?>" ></td></tr>
<tr>
<th><strong> Date NAISSANCE: </strong></th> <td><input type="text" name="date" type="date"  value="<?php echo $_SESSION['date_naissance']; ?>" disabled="disabled"></td></tr>
<tr>
<th><strong> GRADE : </strong></th> <td><input type="text" name="grade" type="grade"  value="<?php echo $_SESSION['grade']; ?>" disabled="disabled"></td></tr>
<tr>
<th><strong> FONCTION : </strong></th> <td><input type="text" name="fonction" type="fonction"  value="<?php echo $_SESSION['fonction']; ?>" disabled="disabled"></td></tr>
<th><strong> SEXE : </strong></th> <td> <input type="text" name="sexe" value="<?php echo $_SESSION['sexe']; ?>" disabled="disabled"></td></tr>
<tr><td><input  style="  width:150px;"type="submit" class=" more blue"  value="Enregistrer mes infos" onclick="if(!confirm('Voulez-vous confirmer la Modification?')) return false;"></td>

<td>	
							    		<a href="index.php?page=compte" style="  width:100px;height: 35px; margin-left: 7px;margin-top: 20px" class=" more blue" role="button" aria-pressed="true"> Annuler</a>
							    	</td>
</tr>

</table><br>

</form>



</div>


				</div>
<div class="page_right">
			<br>
				

					<div  id="done"style="margin-top:20px; position:relative; font-size:16px;"	>				
<table class="" border='0' width="150px" height="100px" style="right: 20px">
<tr>
 
<th>  <img src="photos/<?php echo $_SESSION['photo']; ?>" alt="photo de profile" width="200px" height="200px" /></th>
<td>  </td> 
</tr>


</table><br>



<button class=" more blue" id="ch" >changer photo </button>


	

	
</div>




<div id="for" style=" display:none;margin-top:10px; position:relative; font-size:16px;"	>
<form action="" class="contact_form1" id="" method="post" enctype="multipart/form-data">				
<table border='0' width="150px" height="100px">

<th><strong> Votre nouvelle photo </strong>
</th> <td> 

<input type="file" name="photo"  >
<input  name="user_id" type="hidden" value="<?php echo $_SESSION['id']; ?>" />
        
</td></tr>
<tr><td><input  style="  width:150px;" type="submit" class=" more blue"  value="Enregistrer photo" ></td>
<td>	
							    		<a href="index.php?page=compte" style="  width:100px;height: 35px; margin-left: 7px;margin-top: 20px" class=" more blue" role="button" aria-pressed="true"> Annuler</a>
							    	</td>
</tr>

</table><br>

</form>


</div>
</div>


				</div>
				</div>
</div>

		</div>

	</div>
</div>			