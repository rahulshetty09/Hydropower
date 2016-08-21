<?php
		
		session_start();
		session_destroy();
		header('Location:../html/adminlogin.php');
         exit();

?>