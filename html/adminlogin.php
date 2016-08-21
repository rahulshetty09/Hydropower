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
			header('Location:adminpage1.php');
        }
		else
		{
	             $error = "Username or Password is invalid";
		}
	}
}
?>
<html>
	<head>
		<title>Form Validation</title>
		
                 
				    <meta charset="utf-8"/>
					  <meta name="viewport" content="width=device-width, initial-scale=1">
					  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
					    <script src="../javascript/jquery.js"></script>
					    <script src="../bootstrap/js/bootstrap.min.js"></script>
						<link rel="stylesheet" href="../css/header.css" />
						<link rel="stylesheet" href="../css/adminlogin.css" />
					  <link rel="stylesheet" href="../css/footer.css" />
					  <link rel="stylesheet" href="../css/loader.css" />
					  
					  
					  
					  
	</head>
	<script type="text/javascript">
	
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	
	
	
	</script>
	
	
	
	<body>
	<div class="se-pre-con"></div>
	<?php require 'headertry.php';	?>
	 <div class="error"><?php echo $error ?></div>
	<div class="panel panel-primary" id="panel">
	<div class="panel-heading">
    <h3 class="panel-title title">Admin Login</h3>
  </div>
  <div class="panel-body" id="body">
  
                 <form id="adminlogin" action="#" method="POST">
                                 <div class="form-group">
													 <div class="input-group password">
													 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
													<input type="text" class="form-control input-lg" id="Username" name="Username" placeholder="Username">
										           </div>
										  </div>
										  
										  
										  
										  
										    <div class="form-group">
													 <div class="input-group password">
													 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
													<input type="password" class="form-control input-lg" name="Password" id="Password" placeholder="Password">
										           </div>
										  </div>
										  
										  <center> <button type="submit" class="text-center btn btn-success btn-lg" id="submit"  name="submit">Submit</button></center>
									</form>													
										  
										  
  </div>
   </div>
	
	
	
	
	<?php require 'footer.php';	?>
	
	
	
	</body>
</html>