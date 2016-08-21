<?php


$error = " ";
if(isset($_POST['submit']))
{
	
	
	 $user = $_POST['Username'];
	 $pass = $_POST['Password'];
	if(isset($_POST['Username']) && isset($_POST['Password']))  
	{
		if($user == "admin" && $pass == "admin1234")
		{
			 session_start();
			$_SESSION['admin'] = $user;
			header('Location:../html/index.php');
        }
		else
		{         echo "adfk;lsdgk";
	             $error = "Username or Password is invalid";
		}
	}
}
?>