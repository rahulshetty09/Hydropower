<?php

include('db.php');
$error = " ";
if(isset($_POST['submit']))
{
	if(isset($_POST['EmailId']) && $_POST['Password'])  
	{
		$user=mysqli_real_escape_string($con,$_POST['EmailId']);
    	$pass=mysqli_real_escape_string($con,$_POST['Password']);
		
		
	
		
		$sql="select * from register where Email='$user' and Password='$pass'";
		
		$r=mysqli_query($con,$sql);
		
		if(mysqli_num_rows($r) == 1)
		{	
	        session_start();
			$_SESSION['user'] = $user;
			$_SESSION['loggedin']  = true;
			header('Location:../html/index.php');
		}
		else
		{
	             $error = "Username or Password is invalid";
		}
	}
}
?>