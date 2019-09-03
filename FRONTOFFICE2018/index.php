<?php 
session_name("pfa");

session_start();

use back\Models\backoffice\Back as Back;
if(!isset($_SESSION['id'])){
	require("login.php");
}else{
if( isset($_GET["action"]) &&$_GET["action"]=="logout" ){
		session_destroy();
		echo"<script>location.href='index.php';</script>";
	}


require "../BACKOFFICE93/config/db.php";
require "../BACKOFFICE93/models/DB.php";
require "../BACKOFFICE93/models/back.php";
$emp=new Back();






require_once(__DIR__."/Views/header.php");


if(isset($_GET['page'])&&($_GET['page']!='')) {
	echo '<div class="container" style="margin-top:20px;">';
    if(file_exists(__DIR__."/Views/".$_GET['page'].".php")) {
    require_once(__DIR__."/Views/".$_GET['page'].".php");
}else{
    require(__DIR__."/Views/404.html");
}
} else{
    require_once(__DIR__."/Views/default.php");
}
	echo '</div>';




require_once(__DIR__."/Views/footer.php");
} ?>