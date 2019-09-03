<?php
session_name("pfa");
session_start();

use back\Models\backoffice\Back as Back;



require "../BACKOFFICE93/config/db.php";
require "../BACKOFFICE93/models/DB.php";
require "../BACKOFFICE93/models/back.php";
$emp=new Back();




if(isset($_GET['page'])&&($_GET['page']!='')) {
	echo '<div class="container" style="margin-top:20px;">';
    if(file_exists(__DIR__."/Views/".$_GET['page'].".php")) {
    require_once(__DIR__."/Views/".$_GET['page'].".php");
}
	echo '</div>';



}

?>