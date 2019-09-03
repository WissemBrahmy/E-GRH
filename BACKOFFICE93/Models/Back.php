<?php
namespace back\Models\backoffice;


use PDO;

use connection\DB as DBB;

class Back
{
		private $db;


	public function __construct() {

		//singletone db instance
	$this->db=DBB::getConnection();

	

	}

		public function login($guest){
		$q=$this->db->prepare("select * from users where login=? and password= md5(?) and role=1");
		$q->execute([$guest->login,$guest->password]);
		if($q->rowCount()) {
						$user=$q->fetch(PDO::FETCH_OBJ);
		
			if($user===0) {
				echo "<span style='color:red'>Wrong login or password !</span>";
			} 
			$_SESSION['id']=$user->id;
			$_SESSION['nom']=$user->nom;
			$_SESSION['prenom']=$user->prenom;
	
			//redirection
			echo "<script>location.href='index.php' </script>";
		} else{
			return "<span style='color:red'>Wrong login or password !</span>";

		}
	

	}


public function addAdmin($admin) {
	
	$p=md5($_POST['password']);
		$date=date('Y-m-d');
		$q=$this->db->prepare("insert into users( `matricule`,`cin`, `nom`,`prenom`, `date_naissance`, `tel`,`grade`,`fonction`, `sexe`,`adresse`,`ville`,`service`,`contrat`,`login`,`password`,`date`) values(?,?,?,?,null,null,1,null,null,null,null,null,null,?,'".$p."','".$date."')");
	
		
		if(
		$q->execute([$admin->matricule,$admin->cin,$admin->nom,$admin->prenom,$admin->date_naissance,$admin->tel,$admin->grade,$admin->fonction,$admin->sexe,$admin->adresse,$admin->ville,$admin->service,$admin->contrat,$admin->login]) ) {
			echo "<script>alert(' admin cree')</script>";
		echo " <script>location.href='index.php'</script>";

		} else{
			echo "<script>alert('Probleme ajout admin')</script>";

		}
	

	
	}



//***********************AGENTS *******************************************//	

public function loginEmp($guest){
		$q=$this->db->prepare("select * from users where login=? and password= md5(?)  and role is null");
		$q->execute([$guest->login,$guest->password]);
		if($q->rowCount()) {
						$user=$q->fetch(PDO::FETCH_OBJ);
		
			if($user===false) {
				echo "<span style='color:red'>Wrong login or password !</span>";
			} 
			$_SESSION['id']=$user->id;
			$_SESSION['nom']=$user->nom;
			$_SESSION['prenom']=$user->prenom;
			$_SESSION['cin']=$user->cin;
	$_SESSION['date_naissance']=$user->date_naissance;
			$_SESSION['sexe']=$user->sexe;
			$_SESSION['grade']=$user->grade;
			$_SESSION['fonction']=$user->fonction;
			$_SESSION['matricule']=$user->matricule;
			$_SESSION['tel']=$user->tel;
				$_SESSION['photo']=$user->photo;
				$_SESSION['adresse']=$user->adresse;
				$_SESSION['service']=$user->service;
				$_SESSION['contrat']=$user->contrat;
			//redirection
			echo "<script>location.href='index.php' </script>";
		} else{
			return "<span style='color:red'>Wrong login or password !</span>";
}
		}

   
	public function getemp($a){
	$q=$this->db->query("select users.*  from users where id='".$a."'");
		$informations=$q->fetch(PDO::FETCH_OBJ);
		return $informations;
}



		public function updateemp($id,$tel,$adresse) {
    $q=$this->db->prepare("update users set tel='".$tel."',adresse='".$adresse."' where id='".$id."' ");

   if( $q->execute()) {
	$_SESSION["id"]=$id;
		$_SESSION["tel"]=$tel;
		$_SESSION["adresse"]=$adresse;
   	echo "<script>location.href='index.php?page=compte'; alert(' informations modifiees');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}



//return all admins 
	public function getAllAgents() {
		$q=$this->db->query("select * from users where role is null and actif=1 ");
		$admins=$q->fetchAll(PDO::FETCH_OBJ);
		
		return $admins;
	}
	public function getAllAgentsCDI() {
		$q=$this->db->query("select * from users where role is null and actif=1 and contrat='CDI' ");
		$admins=$q->fetchAll(PDO::FETCH_OBJ);
		
		return $admins;
	}
	public function getAllAgentsCDD() {
		$q=$this->db->query("select * from users where role is null and actif=1 and contrat='CDD' ");
		$admins=$q->fetchAll(PDO::FETCH_OBJ);
		
		return $admins;
	}

	public function getAllxAgents() {
		$q=$this->db->query("select * from users where role is null and actif=0 ");
		$admins=$q->fetchAll(PDO::FETCH_OBJ);
		
		return $admins;
	}




	
	public function addAgent($admin) {
	
	$p=md5($_POST['password']);
		$date=date('Y-m-d');
		$q=$this->db->prepare("insert into users( `matricule`,`cin`, `nom`,`prenom`, `date_naissance`, `tel`,`grade`,`fonction`, `sexe`,`adresse`,`ville`,`service`,`contrat`,`login`,`password`,`date`) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,'".$p."','".$date."')");
	
		
		if(
		$q->execute([$admin->matricule,$admin->cin,$admin->nom,$admin->prenom,$admin->date_naissance,$admin->tel,$admin->grade,$admin->fonction,$admin->sexe,$admin->adresse,$admin->ville,$admin->service,$admin->contrat,$admin->login]) ) {
			echo "<script>alert(' Employe cree')</script>";
		echo " <script>location.href='index.php?page=agents'</script>";

		} else{
			echo "<script>alert('Probleme ajout agent')</script>";

		}
	

	
	}
			public function updateAgent($admin) {
$p=md5($_POST['password']);

    $q=$this->db->prepare("update users set matricule=?,cin=?,nom=?, prenom=?,date_naissance=?,tel=?,grade=?, sexe=? , adresse=?, service=?, login=? ,password='".$p."' where id=? ");

   if( $q->execute([$admin->matricule,


   	$admin->cin,


   	$admin->nom,
   	$admin->prenom,
   	$admin->date_naissance,
   	$admin->tel,
   	$admin->grade,
   	$admin->sexe,
   		$admin->adresse,
   			$admin->service,
   	$admin->login,
   	$admin->id])) {

   	echo "<script>location.href='index.php?page=agents'; alert(' Agent modifiee');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}


			




	public function deleteAgent($id) {
		$q=$this->db->prepare("update  users set actif=0 where id=?");
		if($q->execute([$id])) {

			echo "<script>location.href='index.php?page=agents'; alert('  Agent supprime '); </script>";
		} else{
			echo "<script> alert('Probleme')</script>";
		}
	}



	public function deleteexagent($id) {
		$q=$this->db->prepare("delete from users where id=?");
		if($q->execute([$id])) {
			echo "<script>location.href='index.php?page=exagent'; alert('  agent supprime '); </script>";
		} else{
			echo "<script> alert('Probleme')</script>";
		}
	}

//***********************PROFILS *******************************************//	


	public function getAllprofils() {
		$q=$this->db->query("select profil.*,users.nom,users.prenom,users.matricule, users.photo from profil inner join users on profil.user_id=users.id ");
		$info=$q->fetchAll(PDO::FETCH_OBJ);
		return $info;
	}

	public function getprofil() {
		$q=$this->db->query("select profil.*,users.nom,users.prenom,users.matricule,users.photo from profil inner join users on profil.user_id=users.id and user_id='" . $_SESSION['id']. "' ");
		$info=$q->fetchAll(PDO::FETCH_OBJ);
		return $info;
	}


		public function getprofilbyID($v){
	$q=$this->db->query("select profil.*  from profil where id='".$v."'");
		$informations=$q->fetch(PDO::FETCH_OBJ);
		return $informations;
}


	public function getprofilconnecte() {
		$q=$this->db->query("select profil.*,users.nom,users.prenom,users.matricule,users.photo from profil inner join users on profil.user_id=users.id and user_id='" . $_SESSION['id']. "'");
		$info=$q->fetch(PDO::FETCH_OBJ);
		return $info;
	}

public function addProfil($admin) {
	
	
		
		$q=$this->db->prepare("insert into profil( `diplome`,`experience`, `langue`,`stage`, `competence`, `centre_interet`,`autre_formation`,`niveau_etude`, `etat_civil`,`association`,`user_id`) values(?,?,?,?,?,?,?,?,?,?,?)");
	
		
		if(
		$q->execute([$admin->diplome,$admin->experience,$admin->langue,$admin->stage,$admin->competence,$admin->centre_interet,$admin->autre_formation,$admin->niveau_etude,$admin->etat_civil,$admin->association,$admin->agent]) ) {
			echo "<script>alert(' profil ajoute')</script>";
		echo " <script>location.href='index.php?page=profil'</script>";

		} else{
			echo "<script>alert('Probleme ajout agent')</script>";

		}
	

	
	}

public function deleteProfil($id) {
		$q=$this->db->prepare("delete from profil where id=?");
		if($q->execute([$id])) {
			echo "<script>location.href='index.php?page=profil'; alert('  profil supprime '); </script>";
		} else{
			echo "<script> alert('Probleme')</script>";
		}
	}

public function updateprofil($admin) {


    $q=$this->db->prepare("update profil set diplome=?,experience=?,langue=?, stage=?,competence=?,centre_interet=?,autre_formation=?, niveau_etude=?, etat_civil=? , association=? where id=? ");

   if( $q->execute([$admin->diplome,


   	$admin->experience,

$admin->langue,
$admin->stage,
   	$admin->competence,
   	$admin->centre_interet,
   	$admin->autre_formation,
   	
   		$admin->niveau_etude,
   	$admin->etat_civil,
   		$admin->association,
   		
   
   	$admin->id])) {

   	echo "<script>location.href='index.php?page=profil'; alert(' Profil modifiee');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}


	//***********************jours feriers *******************************************//	

//return all admins 
	public function getAllJours_feriers() {
		$q=$this->db->query("select * from jours_feriers");
		$admins=$q->fetchAll(PDO::FETCH_OBJ);
		
		return $admins;
	}




	
	public function addJour_ferier($admin) {
	
	
		
		$q=$this->db->prepare("insert into jours_feriers( `name`,  `date`) values(?,?)");
	
		
		if(
		$q->execute([$admin->name,$admin->date]) ) {
			echo "<script>alert(' Jour ferier cree')</script>";
		echo " <script>location.href='index.php?page=jours_feriers'</script>";

		} else{
			echo "<script>alert('Probleme ajout ')</script>";

		}
	

	
	}
			public function updateJour_ferier($info) {
    $q=$this->db->prepare("update jours_feriers set name=?,date=? where id=? ");

   if( $q->execute([$info->name,$info->date,$info->id])) {

   	echo "<script>location.href='index.php?page=jours_feriers'; alert(' Jour ferier modifiee');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}


			




	public function deleteJour_ferier($id) {
		$q=$this->db->prepare("delete from jours_feriers where id=?");
		if($q->execute([$id])) {
			echo "<script>location.href='index.php?page=jours_feriers'; alert('  Jour ferier supprime '); </script>";
		} else{
			echo "<script> alert('Probleme')</script>";
		}
	}




//***********************************stagiaires*************************//

public function getAllstagiaires() {
		$q=$this->db->query("select * from stagiaire where masque=1");
		$admins=$q->fetchAll(PDO::FETCH_OBJ);
		
		return $admins;
	}
public function getstagiaireTermine() {
		$q=$this->db->query("select * from stagiaire where masque=0");
		$admins=$q->fetchAll(PDO::FETCH_OBJ);
		
		return $admins;
	}

public function addstagiaire($info) {
	
	
		
		$q=$this->db->prepare("insert into stagiaire( `nom`,`prenom`, `cin`,`matricule`,`specialite`,`mission` ,`date_deb`,`date_fin`,`sexe`) values(?,?,?,?,?,?,?,?,?)");
	
		
		if(
		$q->execute([$info->nom,$info->prenom,$info->cin,$info->matricule,$info->specialite,$info->mission,$info->date_deb,$info->date_fin,$info->sexe]) ) {
			echo "<script>alert(' Stagiaire cree')</script>";
		echo " <script>location.href='index.php?page=stagiaire'</script>";

		} else{
			echo "<script>alert('Probleme ajout ')</script>";

		}
	

	
	}

	public function deletestagiaire($id) {
		$q=$this->db->prepare("delete from stagiaire where id=?");
		if($q->execute([$id])) {
			echo "<script>location.href='index.php?page=stagiaire'; alert('  stagiaire supprime '); </script>";
		} else{
			echo "<script> alert('Probleme')</script>";
		}
	}

public function updatestagiaire($info) {
    $q=$this->db->prepare("update stagiaire set nom=?, prenom=?, cin=?, matricule=? ,specialite=? ,mission=?,date_deb=?,date_fin=?, sexe=? where id=? ");

   if( $q->execute([$info->nom,$info->prenom,$info->cin,$info->matricule,$info->specialite,$info->mission,$info->date_deb,$info->date_fin,$info->sexe,$info->id])) {

   	echo "<script>location.href='index.php?page=stagiaire'; alert(' stagiaire modifiee');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}


 public function finsatge($id) {
    $q=$this->db->prepare("update stagiaire set masque=0  where id='".$id."' ");

   if( $q->execute()) {
	
	
   	echo "<script>location.href='index.php?page=stagiaire'; alert(' stage terminee');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	
}
	public function getattestationstage($a){
	$q=$this->db->query("select stagiaire.*  from stagiaire where id='".$a."'");
		$informations=$q->fetch(PDO::FETCH_OBJ);
		
		return $informations;}

//***********************************absence*************************//

	public function getAllAbsences() {
		$q=$this->db->query("select absences.*,users.nom,users.prenom,users.matricule from absences inner join users on absences.user_id=users.id ");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
	}

		public function getAbsencebyAgent($agent){
	$q=$this->db->query("select absences.*  from absences where user_id='".$agent."' order by date desc");
		$informations=$q->fetchall(PDO::FETCH_OBJ);
		return $informations;
}


public function getabsenceemp() {
		$q=$this->db->query("select absences.*,users.nom,users.prenom,users.matricule from absences inner join users on absences.user_id=users.id and  user_id='" . $_SESSION['id']. "' and masque=1 ");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
	}




	public function addAbsence($info) {
		$qq=$this->db->query("select * from jours_feriers where date='".$info->date."'");
		if($qq->rowCount()){
			   	echo "<script>location.href='index.php?page=absences'; alert(' Date d absence est un jour ferier');</script>";

		}
		else{

    $q=$this->db->prepare("insert into absences(date,heures,user_id) values(?,?,?)");
   if( $q->execute([$info->date,$info->heures,$info->agent])) {
   	echo "<script>location.href='index.php?page=absences';</script>"; 
 
   } else{
   	echo "<script> alert('Probleme);</script>";

   }
}

	}
		public function updateAbsence($info) {
				$qq=$this->db->query("select * from jours_feriers where date='".$info->date."'");
		if($qq->rowCount()){
			   	echo "<script>location.href='index.php?page=absences'; alert(' Date d absence est un jour ferier');</script>";

		}
		else{


    $q=$this->db->prepare("update absences set date=?,heures=?,user_id=? where id=? ");
   if( $q->execute([$info->date,$info->heures,$info->agent,$info->id])) {
   	echo "<script>location.href='index.php?page=absences'; alert(' Absence modifiee');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }
}

	}
		public function deleteAbsence($id) {
		$q=$this->db->prepare("delete from absences where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=absences'; alert(' Absence supprimee');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	}

 public function masquerAbsence($id) {
    $q=$this->db->prepare("update absences set masque=0  where id='".$id."' ");

   if( $q->execute()) {
	
	
   	echo "<script>location.href='index.php?page=absences'; alert(' absence masquee');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	
}

	//***********************************CONGES*************************//
	public function getCongesaccepteEMP() {
		$q=$this->db->query("select conges.*,users.nom,users.prenom,users.matricule from conges inner join users on conges.user_id=users.id and verif='0' and attente='0' and  user_id='" . $_SESSION['id']. "'");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
	}



	public function getCongesAttente() {
		$q=$this->db->query("select conges.*,users.nom,users.prenom,users.matricule from conges inner join users on conges.user_id=users.id and verif='1' and attente='1'");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
	}


		public function getCongesaccepte() {
		$q=$this->db->query("select conges.*,users.nom,users.prenom,users.matricule from conges inner join users on conges.user_id=users.id and verif='0' and attente='0' ");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
	}

	public function getCongesrefuse() {
		$q=$this->db->query("select conges.*,users.nom,users.prenom,users.matricule from conges inner join users on conges.user_id=users.id and verif='1' and attente='0'");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
	}

	public function getCongebyAgent($agent){
	$q=$this->db->query("select conges.*  from conges where user_id='".$agent."' and verif='0' and attente='0' order by date_demande desc LIMIT 4");
		$informations=$q->fetchall(PDO::FETCH_OBJ);
		return $informations;
}

public function getCongerefusebyAgent($agent){
	$q=$this->db->query("select conges.*  from conges where user_id='".$agent."' and verif='1' and attente='0' order by date_demande desc ");
		$informations=$q->fetchall(PDO::FETCH_OBJ);
		return $informations;
}

public function getCongeattentebyAgent($agent){
	$q=$this->db->query("select conges.*  from conges where user_id='".$agent."' and verif='1' and attente='1' order by date_demande desc ");
		$informations=$q->fetchall(PDO::FETCH_OBJ);
		return $informations;
}

	public function addConges($info) {
		$qq=$this->db->prepare("select * from jours_feriers where date between ? and ?");
		$qq->execute([$info->date_deb,$info->date_fin]);
		if($qq->rowCount()){
			   	echo "<script>location.href='index.php?page=conges'; alert('Periode de conges contient un jour ferier');</script>";

		}
		else{

    $q=$this->db->prepare("insert into conges(date_deb,date_fin,user_id,attente,verif,type) values(?,?,?,?,?,?)");
   if( $q->execute([$info->date_deb,$info->date_fin,$info->agent,$info->attente,$info->verif,$info->type])) {
   	echo "<script>location.href='index.php?page=conges'; alert(' conges ajoute');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }
}

	}
		public function updateConges($info) {
	$qq=$this->db->prepare("select * from jours_feriers where date between ? and ?");
		$qq->execute([$info->date_deb,$info->date_fin]);
		if($qq->rowCount()){
			   	echo "<script>location.href='index.php?page=conges'; alert('Periode de conges contient un jour ferier');</script>";

		}
		else{


    $q=$this->db->prepare("update conges set date_demande=?,date_deb=?,date_fin=?, user_id=? where id=? ");
   if( $q->execute([date('Y-m-d'),$info->date_deb,$info->date_fin,$info->agent,$info->id])) {
   	echo "<script>location.href='index.php?page=conges'; alert(' conges modifie');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }
}

	}
		public function deleteConges($id) {
		$q=$this->db->prepare("delete from conges where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=conges'; alert('Conges Annuler');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	}

	

		
		public function accepteconge($id) {
	


    $q=$this->db->prepare("update conges set verif='0', attente='0' where id=? ");
   if( $q->execute([$id]))  {
   	echo "<script>location.href='index.php?page=conges'; alert(' conges acceptée');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}

	public function refuseconge($id) {
		$q=$this->db->prepare("update conges set verif='1', attente='0' where id=? ");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=conges'; alert('conge refusé');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	

}

	









	//***********************************note*************************//

	public function getAllNote() {
		$q=$this->db->query("select note.*,users.nom,users.prenom,users.matricule from note inner join users on note.id_user=users.id ");
		$info=$q->fetchAll(PDO::FETCH_OBJ);
		return $info;
	}

		public function getNote() {
		$q=$this->db->query("select note.*,users.nom,users.prenom,users.matricule from note inner join users on note.id_user=users.id and id_user='" . $_SESSION['id']. "' and masque='1'");
		$info=$q->fetchAll(PDO::FETCH_OBJ);
		return $info;
	}
			public function getNotebyAgent($agent){
	$q=$this->db->query("select note.*  from note where id_user='".$agent."' order by date desc ");
		$informations=$q->fetchALL(PDO::FETCH_OBJ);
		return $informations;
}

	public function addnote($info) {
	

   $q=$this->db->prepare("insert into  note(date,titre,note,id_user) values(?,?,?,?)");

   if( $q->execute([$info->date,$info->titre,$info->note,$info->agent])) {

   	echo "<script>location.href='index.php?page=note'; alert(' note Ajoute');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }
	
}

	
		public function updateNote($info) {
	


    $q=$this->db->prepare("update note set date=?,titre=?,note=? where id=? ");
   if( $q->execute([$info->date,$info->titre,$info->note,$info->id]))  {
   	echo "<script>location.href='index.php?page=note'; alert(' note modifie');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }
}

   public function masquerRemarque($id) {
    $q=$this->db->prepare("update note set masque=0  where id='".$id."' ");

   if( $q->execute()) {
	
	
   	echo "<script>location.href='index.php?page=remarques'; alert(' remarque masquee');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	
}

	
		public function deleteNote($id) {
		$q=$this->db->prepare("delete from note where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=note'; alert('note supprimee');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	}

//***********************************salaires*************************//

	public function getAllSalaire() {
		$q=$this->db->query("select salaire.*,users.nom,users.prenom,users.matricule from salaire inner join users on salaire.user_id=users.id ");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
	}

	public function getsalaire($a){
	$q=$this->db->query("select salaire.*  from salaire where user_id='".$a."'");
		$informations=$q->fetch(PDO::FETCH_OBJ);
		return $informations;
}

	public function getsalairebyAgent($agent){
	$q=$this->db->query("select salaire.*  from salaire where user_id='".$agent."'");
		$informations=$q->fetchALL(PDO::FETCH_OBJ);
		return $informations;
}



	public function addSalaire($info) {
		$qq=$this->db->prepare("select * from salaire where user_id=?");
		$qq->execute([$info->agent]);
		if($qq->rowCount()){
			   	echo "<script>location.href='index.php?page=salaires'; alert('employe a deja un salaire');</script>";

		}
		else{
		
   $q=$this->db->prepare("insert into  salaire(salaire,prime_rend,	prime_ancien,prime_presence,prime,user_id) values(?,?,?,?,?,?)");

   if( $q->execute([$info->salaire,$info->prime_rend,$info->prime_ancien,$info->prime_presence,$info->prime,$info->agent])) {


   } 
   else{
   	echo "<script> alert('Probleme);</script>";

   }
	
}}

	
		public function updateSalaire($info) {
	


    $q=$this->db->prepare("update salaire set salaire=?,prime=?,prime_rend=?,	prime_ancien=?,prime_presence=? where id=? ");
   if( $q->execute([$info->salaire,$info->prime_rend,$info->prime_ancien,$info->prime_presence,$info->prime,$info->id]))  {
   	echo "<script>location.href='index.php?page=salaires'; alert(' salaire modifie');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }
}

	
		public function deleteSalaire($id) {
		$q=$this->db->prepare("delete from salaire where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=salaires'; alert('salaire supprimee');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	}



//***********************************DEPLACEMENTS*************************//

	public function getAllDeplacements() {
		$q=$this->db->query("select deplacements.*,users.nom,users.prenom,users.matricule,users.grade from deplacements inner join users on deplacements.user_id=users.id");
		$inscriptions=$q->fetchAll(PDO::FETCH_OBJ);
		return $inscriptions;
	}

		public function getDeplacementsemp() {
		$q=$this->db->query("select deplacements.*,users.nom,users.prenom,users.matricule,users.grade from deplacements inner join users on deplacements.user_id=users.id and user_id='" . $_SESSION['id']. "' ");
		$inscriptions=$q->fetchAll(PDO::FETCH_OBJ);
		return $inscriptions;
	}	
	

	public function getDeplacementbyAgent($agent){
	$q=$this->db->query("select deplacements.*  from deplacements where user_id='".$agent."' order by date desc LIMIT 4");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
}
	public function getdeplacement($a){
	$q=$this->db->query("select deplacements.*  from deplacements where id='".$a."'");
		$informations=$q->fetch(PDO::FETCH_OBJ);
		return $informations;
}

		public function deleteDeplacement($id) {
		$q=$this->db->prepare("delete from deplacements where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=deplacements'; alert(' Deplacement supprimee');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}

	}
				public function updateDeplacement($info) {
    $q=$this->db->prepare("update deplacements set objet_mission=?,fonction=?, lieu=?,prime=?,date_dep=?,date_retour=? ,moyen_transport=?,user_id=? where id=? ");

   if( $q->execute([$info->objet_mission,$info->fonction,$info->lieu,$info->prime,$info->date_depart,$info->date_retour,$info->moyen_transport,$info->agent,$info->id])) {

   	echo "<script>location.href='index.php?page=deplacements'; alert(' deplacement modifiee');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}
				public function AddDeplacement($info) {
    $q=$this->db->prepare("insert into  deplacements(objet_mission,fonction,lieu,prime,date_depart,date_retour,moyen_transport,user_id) values(?,?,?,?,?,?,?,?)");

   if( $q->execute([$info->objet_mission,$info->fonction,$info->lieu,$info->prime,$info->date_depart,$info->date_retour,$info->moyen_transport,$info->agent])) {

   	echo "<script>location.href='index.php?page=deplacements'; alert(' deplacement Ajoute');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }}
   //***********************************MESSAGES*************************//

	public function getAllMessage() {
		$q=$this->db->query("select messages.*,users.nom,users.prenom,users.matricule from messages inner join users on messages.user_id=users.id and users.role is null AND agent='agent' order by messages.date desc");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
	}


public function getmessagebyagent() {
		$q=$this->db->query("select * from messages where admin='admin' and user_id='" . $_SESSION['id']. "'");
		$admins=$q->fetchAll(PDO::FETCH_OBJ);
		
		return $admins;
	}

	public function getmessageEnvoibyagent() {
		$q=$this->db->query("select * from messages where agent='agent' and user_id='" . $_SESSION['id']. "'");
		$admins=$q->fetchAll(PDO::FETCH_OBJ);
		
		return $admins;
	}

	public function addmessageAdmin($info) {
	

   $q=$this->db->prepare("insert into  messages(titre,message,user_id,admin,agent) values(?,?,?,?,?)");

   if( $q->execute([$info->titre,$info->message,$info->agent,$info->admin,$info->ag])) {

   	echo "<script>location.href='index.php?page=messages'; alert(' message envoyee');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }
	
}



	
public function addmessageEmp($message){
	//var_dump($data);

$q=$this->db->prepare("insert into messages( `titre`,  `message`, `user_id`,`admin`, `agent`) values(?,?,?,?,?)");
	
		
		if(
		$q->execute([$message->titre,$message->message,$message->user_id,$message->adm,$message->ag]) ) {
			echo "<script>alert(' message envoyee')</script>";
		echo " <script>location.href='index.php?page=message'</script>";

		} else{
			echo "<script>alert('Probleme envoi')</script>";

		}
	}

	
	
		public function updatemessage($info) {
	


    $q=$this->db->prepare("update messages set message=?,titre=? where id=? ");
   if( $q->execute([$info->titre,$info->message,$info->id]))  {
   	echo "<script>location.href='index.php?page=messages'; alert(' salaire modifie');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }
}

	
		public function deletemessage($id) {
		$q=$this->db->prepare("delete from messages where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=messages'; alert('message supprimee');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	}



	
		
//****************************pointage********************
	
public function getAllpointages() {
		$q=$this->db->query("select pointage.*,users.nom,users.prenom,users.matricule,users.grade from pointage inner join users on pointage.user_id=users.id order by pointage.datep desc");
		$inscriptions=$q->fetchAll(PDO::FETCH_OBJ);
		return $inscriptions;
	}
	public function getPointageEMP() {
		$q=$this->db->query("select pointage.*,users.nom,users.prenom,users.matricule,users.grade from pointage inner join users on pointage.user_id=users.id and user_id='" . $_SESSION['id']. "' and chekin=1 and checkout=1 order by pointage.datep desc LIMIT 1 ");
		$pointage=$q->fetchAll(PDO::FETCH_OBJ);
		return $pointage;
	}



	public function pointage($pointage){
	//var_dump($data);
$time = date("H:i:s"); 
$date=date('Y-m-d');

	$qq=$this->db->prepare("select * from pointage where datep=  '".$date."'");
		$qq->execute([$date]);
		if($qq->rowCount()){
			   	echo "<script>location.href='index.php?page=pointage'; alert('vous etes deja pointez');</script>";

		}
		else{


	//EMPLOYE
$c=$_POST['code'];
		$query=$this->db->prepare("select * from code where code ='".$c."' ");
	$query->execute();
	$total=$query->fetch(PDO::FETCH_OBJ);
	if($total){


$q=$this->db->prepare("insert into pointage( `chekin`, `user_id`,`code`,`heure`,`datep`) values(?,?,?,'".$time."','".$date."')");
	if ($time<"11:59:00"  && $time >="11:20:00" ){
		
		if($q->execute([$pointage->chekin,$pointage->user_id,$pointage->code  ])) {

				$q=$this->db->prepare("update  code set code=0000 where code='".$c."'");
		$q->execute();
			
		echo " <script>location.href='index.php?page=pointage'; alert('pointage effectuee');</script>";

		} else{
			echo "<script>alert('Probleme pointage')</script>";

		}
	}
	else{
			echo "<script>alert('vous avez dépassez le temps')</script>";
			  $q=$this->db->prepare("insert into absences(date,heures,user_id) values('".$date."',4,?)");
   $q->execute([$pointage->user_id]);
   	echo "<script>location.href='index.php?page=pointage';</script>"; 

		}}

else{
			echo "<script>alert('code incorrect ou déja utilisé')</script>";

		}
	}
		
	}

		public function deletepointage($id) {
		$q=$this->db->prepare("delete from pointage where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=pointages'; alert('pointage supprimee');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	}


//pointage_sortie

public function pointagesortie($pointage){
	//var_dump($data);
$time = date("H:i:s"); 
$date=date('Y-m-d');

	$qq=$this->db->prepare("select * from pointage where date_sortie=  '".$date."'");
		$qq->execute([$date]);
		if($qq->rowCount()){
			   	echo "<script>location.href='index.php?page=pointage_sortie'; alert('vous etes deja pointez pour sortir');</script>";

		}
		else{


	//EMPLOYE
$i=$_POST['code_sortie'];
		$query=$this->db->prepare("select * from code where code_sortie ='".$i."' ");
	$query->execute();
	$total=$query->fetch(PDO::FETCH_OBJ);
	if($total){




$q=$this->db->prepare("update pointage set checkout=1, code_sortie='".$i."',heure_sortie='".$time."',date_sortie='".$date."' where user_id='" .$_SESSION["id"]. "'");
		if ($time<"11:59:00"  && $time >="11:20:00" ){
		
		if($q->execute()) {

				$q=$this->db->prepare("update  code set code_sortie=0000 where code_sortie='".$i."'");
		$q->execute();
			
		echo " <script>location.href='index.php?page=pointage_sortie'; alert('pointage sortie effectuee');</script>";

		} else{
			echo "<script>alert('Probleme pointage sortie')</script>";

		}
	}
	else{
			echo "<script>alert('pointage de sortie a echoue ')</script>";
			  $q=$this->db->prepare("insert into absences(date,heures,user_id) values('".$date."',8,?)");
   $q->execute([$pointage->user_id]);
   	echo "<script>location.href='index.php?page=pointage_sortie';</script>"; 

		}}

else{
			echo "<script>alert('code incorrect ou déja utilisé')</script>";

		}
	}
		
	}

	




//******************* rapport****************
	
public function getAllrapports() {
		$q=$this->db->query("select rapport.*,users.nom,users.prenom,users.matricule,users.grade from rapport inner join users on rapport.user_id=users.id order by rapport.date desc");
		$rapports=$q->fetchAll(PDO::FETCH_OBJ);
		return $rapports;
	}

	public function getrapportsEMP() {
		$q=$this->db->query("select rapport.*,users.nom,users.prenom,users.matricule,users.grade from rapport inner join users on rapport.user_id=users.id and user_id='" . $_SESSION['id']. "' order by rapport.date desc  ");
		$rapports=$q->fetchAll(PDO::FETCH_OBJ);
		return $rapports;
	}



	public function addrapport($info) {

		
    $q=$this->db->prepare("insert into rapport(`path`,`user_id`) values(?,?)");
   if( $q->execute([$info->path, $info->user_id])) {
   	echo "<script>location.href='index.php?page=partage'; alert(' rapport ajoute');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}

		public function deleterapport($id) {
		$q=$this->db->prepare("delete from rapport where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php'; alert('rapport supprimee');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	}



//******************* piece justificatifs****************
	
public function getAllpieces() {
		$q=$this->db->query("select piece_justif.*,users.nom,users.prenom,users.matricule,users.grade from piece_justif inner join users on piece_justif.user_id=users.id order by piece_justif.date desc");
		$inscriptions=$q->fetchAll(PDO::FETCH_OBJ);
		return $inscriptions;
	}

	public function getpiecesEMP() {
		$q=$this->db->query("select piece_justif.*,users.nom,users.prenom,users.matricule,users.grade from piece_justif inner join users on piece_justif.user_id=users.id and user_id='" . $_SESSION['id']. "' order by piece_justif.date desc  ");
		$rapports=$q->fetchAll(PDO::FETCH_OBJ);
		return $rapports;
	}



	public function addpiece($info) {

		
    $q=$this->db->prepare("insert into piece_justif(`path`,`date_absence`,`user_id`) values(?,?,?)");
   if( $q->execute([$info->path, $info->date_absence, $info->user_id])) {
   	echo "<script>location.href='index.php?page=piece_justif'; alert('piece ajoute');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}

		public function deletepiece($id) {
		$q=$this->db->prepare("delete from piece_justif where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php'; alert('piece supprimee');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	}


//***************************avance******************************




///admin
public function getAllavances() {
		$q=$this->db->query("select avances.*,users.nom,users.prenom,users.matricule,users.grade from avances inner join users on avances.user_id=users.id and attente=0");
		$avances=$q->fetchAll(PDO::FETCH_OBJ);
		return $avances;
	}
public function getavancesAccepte() {
		$q=$this->db->query("select avances.*,users.nom,users.prenom,users.matricule,users.grade from avances inner join users on avances.user_id=users.id and verif=1 and attente=1");
		$avances=$q->fetchAll(PDO::FETCH_OBJ);
		return $avances;
	
}
public function getavancesRefuse() {
		$q=$this->db->query("select avances.*,users.nom,users.prenom,users.matricule,users.grade from avances inner join users on avances.user_id=users.id and verif=0 and attente=1");
		$avances=$q->fetchAll(PDO::FETCH_OBJ);
		return $avances;
	}

   public function getavance($id) {

	$query=$this->db->prepare("select * from avances where user_id ='".$id."' and verif=1 and attente=1");
	$query->execute();
	$total=$query->fetch(PDO::FETCH_OBJ);
	return $total;
}


public function getAvancebyAgent($agent){
	$q=$this->db->query("select avances.*  from avances where user_id='".$agent."' and verif='0' and attente='0' order by date desc LIMIT 4");
		$informations=$q->fetchall(PDO::FETCH_OBJ);
		return $informations;
}

public function getAvancerefusebyAgent($agent){
	$q=$this->db->query("select avances.*  from avances where user_id='".$agent."' and verif='1' and attente='0' order by date desc ");
		$informations=$q->fetchall(PDO::FETCH_OBJ);
		return $informations;
}

public function getAvanceattentebyAgent($agent){
	$q=$this->db->query("select avances.*  from avances where user_id='".$agent."' and verif='1' and attente='1' order by date desc ");
		$informations=$q->fetchall(PDO::FETCH_OBJ);
		return $informations;
}


public function addavance($avance){
	//var_dump($data);

$q=$this->db->prepare("insert into avances( `montant`, `user_id`) values(?,?)");
	
		
		if(
		$q->execute([$avance->montant,$avance->user_id]) ) {
			echo "<script>alert(' demande effectuer')</script>";
		echo " <script>location.href='index.php?page=compte'</script>";

		} else{
			echo "<script>alert('Probleme d'envoi)</script>";

		}
	}

	public function deleteavance($id) {
		$q=$this->db->prepare("delete from avances where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=avances'; alert('avance supprimé');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	

}
		public function accepteavance($id) {
	


    $q=$this->db->prepare("update avances set verif=1, attente=1 where id=? ");
   if( $q->execute([$id]))  {
   	echo "<script>location.href='index.php?page=avances'; alert(' avance acceptée');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}

	public function refuseavance($id) {
		$q=$this->db->prepare("update avances set attente=1 where id=? ");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=avances'; alert('avance refusé');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	

}

//employer



public function getavancesEmp() {
		$q=$this->db->query("select avances.*,users.nom,users.prenom,users.matricule,users.grade from avances inner join users on avances.user_id=users.id and attente=0 and user_id='" . $_SESSION['id']. "'");
		$avances=$q->fetchAll(PDO::FETCH_OBJ);
		return $avances;
	}
public function getavancesAccepteEMP() {
		$q=$this->db->query("select avances.*,users.nom,users.prenom,users.matricule,users.grade from avances inner join users on avances.user_id=users.id and verif=1 and attente=1 and user_id='" . $_SESSION['id']. "'");
		$avances=$q->fetchAll(PDO::FETCH_OBJ);
		return $avances;
	
}
public function getavancesRefuseEMP() {
		$q=$this->db->query("select avances.*,users.nom,users.prenom,users.matricule,users.grade from avances inner join users on avances.user_id=users.id and verif=0 and attente=1 and user_id='" . $_SESSION['id']. "'");
		$avances=$q->fetchAll(PDO::FETCH_OBJ);
		return $avances;
	}


//*****************************************photos**************************************

public function getphotoEmp() {
		$q=$this->db->query("select photos.*,users.nom,users.prenom,users.matricule,users.grade from photos inner join users on photos.user_id=users.id and  user_id='" . $_SESSION['id']. "' order by date limit 1");
		$photos=$q->fetchAll(PDO::FETCH_OBJ);
		return $photos;
	}

public function addphoto($info) {

		
    $q=$this->db->prepare("insert into photos(`path`,`user_id`) values(?,?)");
   if( $q->execute([$info->path, $info->user_id])) {
   	echo "<script>location.href='index.php?page=compte'; alert(' photos ajoute');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}




		public function updatephoto($id,$photo) {
    $q=$this->db->prepare("update users set photo='".$photo."' where id='".$id."' ");

   if( $q->execute()) {
	$_SESSION["id"]=$id;
		$_SESSION["photo"]=$photo;
   	echo "<script>location.href='index.php?page=compte'; alert(' photo modifiee');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}

//****************************statistique******************************

	public function getStatsCongbyagent($a){
	$stats=array();

$q=$this->db->query("select count(id) as count from conges where user_id='".$a."'");
	$stats['cong']=$q->fetchColumn();

return $stats;
}

	public function getStatsAbsencebyAgent($a){
	$stats=array();

$q=$this->db->query("select count(id) as count from absences where user_id='".$a."'");
	$stats['abs']=$q->fetchColumn();

return $stats;
}


	public function getStatsbyagent($a){
	$stats=array();

$q=$this->db->query("select count(id) as count from avances where user_id='".$a."'");
	$stats['avc']=$q->fetchColumn();

return $stats;
}
	public function getStats(){
	$stats=array();


	//EMPLOYE
	$q=$this->db->query("select count(id) as count from users");
	$stats['user']=$q->fetchColumn();
	//FORMATIONS
	$q=$this->db->query("select count(id) as count from formation");
	$stats['formation']=$q->fetchColumn();
	//ABSENCE
		$q=$this->db->query("select count(id) as count from absences");
	$stats['absence']=$q->fetchColumn();
	//stagiaire
		$q=$this->db->query("select count(id) as count from stagiaire");
	$stats['stagiaire']=$q->fetchColumn();
//conges
		$q=$this->db->query("select count(id) as count from conges");
	$stats['conge']=$q->fetchColumn();

	//MESSG
		$q=$this->db->query("select count(id) as count from messages");
	$stats['message']=$q->fetchColumn();

	//SALAIRE
		$q=$this->db->query("select sum(salaire) as count from salaire");
	$stats['salaire']=$q->fetchColumn();
//JOURS FERIER
		$q=$this->db->query("select count(id) as count from jours_feriers");
	$stats['jours_feriers']=$q->fetchColumn();
//rapport
		$q=$this->db->query("select count(id) as count from rapport");
	$stats['rapport']=$q->fetchColumn();
	return $stats;
//STATISTIQUE BY AGENT



}
//******************************************attestation*************************
public function addattestation($attestation){
	//var_dump($data);

$q=$this->db->prepare("insert into attestation_p( `raison`, `user_id`) values(?,?)");
	
		
		if(
		$q->execute([$attestation->raison,$attestation->user_id]) ) {
			echo "<script>alert(' demande effectuee')</script>";
		echo " <script>location.href='index.php?page=attestation_p'</script>";

		} else{
			echo "<script>alert('Probleme d'envoi)</script>";

		}
	}


public function getattestationAttente() {
		$q=$this->db->query("select attestation_p.*,users.nom,users.prenom,users.matricule,users.grade from attestation_p inner join users on attestation_p.user_id=users.id and verif=0 ");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
	}

	public function getattestationAccepte() {
		$q=$this->db->query("select attestation_p.*,users.id,users.nom,users.prenom,users.matricule,users.grade from attestation_p inner join users on attestation_p.user_id=users.id and verif=1 ");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
	}

		public function getattestationbyagent($a){
	$q=$this->db->query("select attestation_p.*  from attestation_p where verif=1 and user_id='".$a."'");
		$informations=$q->fetch(PDO::FETCH_OBJ);
		if ($informations){
		return $informations;}
		else{
			
			echo "<center><div> <h1> pas d'attestation disponible</h1></div></center>";
		}
}
		public function getattestation($a){
	$q=$this->db->query("select attestation_p.*  from attestation_p where id='".$a."'");
		$informations=$q->fetch(PDO::FETCH_OBJ);
		return $informations;
}

	public function accepteAttestation($id) {
	


    $q=$this->db->prepare("update attestation_p set verif=1 where id=? ");
   if( $q->execute([$id]))  {
   	echo "<script>location.href='index.php?page=attestation'; alert(' attestation acceptée');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }

	}
	public function deleteattestation($id) {
		$q=$this->db->prepare("delete from attestation_p where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=attestation'; alert('attestation Annuler');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	}
//**********************************FORMATIONS******************************


		public function getFormations(){
	$q=$this->db->query("select *  from formation");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
}

	public function deleteFormation($id) {
		$q=$this->db->prepare("delete from formation where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=formation'; alert('formation Annuler');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	}

	public function addFormation($formation){
	//var_dump($data);

$q=$this->db->prepare("insert into formation( `titre`, `sujet`, `date`) values(?,?,?)");
	
		
		if(
		$q->execute([$formation->titre,$formation->sujet,$formation->date]) ) {
			echo "<script>alert(' formation ajoutee')</script>";
		echo " <script>location.href='index.php?page=formation'</script>";

		} else{
			echo "<script>alert('Probleme d'envoi)</script>";

		}
	}

		public function updateFormation($info) {
	


    $q=$this->db->prepare("update formation set titre=?,sujet=?,date=? where id=? ");
   if( $q->execute([$info->titre,$info->sujet,$info->date,$info->id]))  {
   	echo "<script>location.href='index.php?page=formation'; alert(' formation modifie');</script>";
   } else{
   	echo "<script> alert('Probleme);</script>";

   }
}





//**********************************code*******************

		public function getcodes(){
	$q=$this->db->query("select *  from code");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
}


public function addCode($code){
	
$h=$_POST["serie"];
$j=$h^145;
$k=$j*$h;
$s=$k+2548934;

$l=$_POST["code_sortie"];
$r=$l^325;
$m=$r*$l*45;
$t=$m+99788523;

$a=$_POST['code'];
$b=$a^81;
$c=$a*$b;
$d=($c*sqrt($a)/2)*31.2;
$e=round($d*120);
$f=($e^14+1000)*8522;





$q=$this->db->prepare("insert into code( `code`,`serie`,`code_sortie`) values('".$f."','".$s."','".$t."')");
	
		
		if(
		$q->execute()) {
			echo "<script>alert(' nouveau code ajoute')</script>";
		echo " <script>location.href='index.php?page=codes'</script>";

		} else{
			echo "<script>alert('Probleme d'envoi)</script>";

		}
	}


public function deletecode($id) {
		$q=$this->db->prepare("delete from code where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=codes'; alert('code Supprimer');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	}
//****************************forum*************

	public function getallforum(){
	$q=$this->db->query("select forum.*,users.nom,users.prenom,users.matricule,users.grade from forum inner join users on forum.user_id=users.id order by date desc");
		$informations=$q->fetchAll(PDO::FETCH_OBJ); 
		return $informations;
}


public function deleteforum($id) {
		$q=$this->db->prepare("delete from forum where id=?");
		if($q->execute([$id])) {
			echo "<script>window.location.href='index.php?page=forum'; alert('forum Supprimer');</script>";
		} else{
			
			echo "<script> alert(' Probleme');</script>";
		}
	}


	public function addforum($forum){
	//var_dump($data);

$q=$this->db->prepare("insert into forum( `titre`, `sujet`, `user_id`) values(?,?,?)");
	
		
		if(
		$q->execute([$forum->titre,$forum->sujet,$forum->user_id]) ) {
			echo "<script>alert(' sujet ajoute')</script>";
		echo " <script>location.href='index.php?page=forum'</script>";

		} else{
			echo "<script>alert('Probleme d'envoi)</script>";

		}
	}
//************************commantaire****************

	public function addcommentaire($com){
	

$q=$this->db->prepare("insert into comment( `commentaire`,`user_id`,`forum`) values(?,?,?)");
	
		
		if(
		$q->execute([$com->commentaire,$com->agent,$com->forum]) ) {
			echo "<script>alert(' commentaire ajoute')</script>";
		echo " <script>location.href='index.php?page=forum'</script>";

		} else{
			echo "<script>alert('Probleme d'envoi)</script>";

		}
	}

public function getcommentairebyforum($a){
	$q=$this->db->query("select comment.*,users.nom,users.prenom,users.matricule,users.grade from comment inner join users on comment.user_id=users.id inner join forum on comment.forum=forum.id and comment.forum='".$a."' order by date Asc");
		$informations=$q->fetchAll(PDO::FETCH_OBJ);
		return $informations;
}


}