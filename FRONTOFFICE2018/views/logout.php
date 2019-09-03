<?php
if($emp->loginemp($guest)){



	session_destroy();
	echo "<script> location.href='login.php' </script>";
}