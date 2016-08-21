<?php
session_start();

		if(isset($_SESSION['admin']))
		{
			
		}
         else{
			 
			 header('Location:adminlogin.php');
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
						<link rel="stylesheet" href="../css/adminlogin1.css" />
					  <link rel="stylesheet" href="../css/footer.css" />
					  <link rel="stylesheet" href="../font-awesome/css/font-awesome.css" />
					   <link rel="stylesheet" href="../css/loader.css" />
					  
					  
	</head>
	<script type="text/javascript">
	$(document).ready(function(){
	 
	 $('#login').append( "<div class=\"loginname\"><button type=\"button\" class=\"btn btn-default\" id = \"logoutbutton\" name=\"logoutbutton\">Logout&nbsp&nbsp<i "
											+ " class=\"fa fa-check-circle-o\" aria-hidden=\"true\"></i></button> </div>");	

	$("a").css("cursor","arrow").click(false);		

    $("#logoutbutton").click(function(){
		window.location.replace('../php/adminlogout.php');
	 });	
	
	});

	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	

	</script>
	<body>
	<div class="se-pre-con"></div>
	<?php include('headertry.php');  ?>
	
	<h3 class="welcome">Welcome Admin</h3>
	<div class="container-fluid" id="container">
					
				<div class="row" id="row">
	
								  <div class="col-md-2 col-md-offset-3">
								  <form method="POST" action="registerlist.php">
								  <center> <button type="submit" class="text-center btn btn-success btn-lg" id="register"  name="submit">Register List</button></center>
								  <div class="button-text">Here's the list of registered user</div>
								  </form>
								  </div>
						
						
						
								  <div class="col-md-2 col-md-offset-2">
								  <form method="POST" action="serviceslist.php">
								   <center> <button type="submit" class="text-center btn btn-success btn-lg" id="services"  name="submit">Services List</button></center>
								   <div class="button-text">Here's the list of users who filled service forms</div>
								   </form>
								  </div>
			   </div>
	</div>
	
	
	<?php include('footer.php');  ?>
	</body>
	</html>