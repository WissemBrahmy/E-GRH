<?php
session_name("pfaSession");
session_start();

use back\Models\backoffice\Back as Back;


require_once("config/db.php");
require "Models/DB.php";
require_once("Models/Back.php");


$admin=new Back();




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





} ?>