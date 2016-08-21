<html>
	<head>
		<title>Form Validation</title>
		
                 <meta charset="utf-8">
					  <meta name="viewport" content="width=device-width, initial-scale=1">
					  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
					   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
					  
					    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
						<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
						<script src="../javascript/codelogin.js"></script>
	
		           <link rel="stylesheet" href="../css/header.css"  type="text/css"  />
					  <link rel= "stylesheet" href="../css/login.css" type="text/css" />
					  <link rel="stylesheet" href="../css/footer.css"  type="text/css"  />			  
		</head>
		
		
		<body>
		
		   <?php require 'headertry.php';	?>
		
		                                  <div class="jumbotron container-fluid maincontent">
									

									<ul class="nav nav-tabs nav-justified navy">
											  <li role="presentation" id="signupitem"  ><a href="try.php">Register</a></li>
											  <li role="presentation" id="loginitem" class="active"><a href="#">Login</a></li>
									</ul>
											
									<div class="content-white">
									<form id="loginform" method="POST" action="../php/signup.php">      
									
									                             <form  id="login-form" method="POST" action="../php/login.php">      
								   <div class="form-group">
													 <div class="input-group username">
													<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
													<input type="text" class="form-control input-lg" name="Usern" data-validation="length " placeholder="Username">
												   </div>
											</div>
									   
									     <div class="form-group">
													 <div class="input-group password">
													 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
													<input type="password" class="form-control input-lg" name="Password" placeholder="Password">
										          </div>
										  </div>
										  
									
										  
										  
										  <div class="password-forgot">
										  <a href="#"><b>Forgot your password</b></a>
										  </div>
										  
											
											<div class="text-center">
												 	<button type="submit" class="text-center btn btn-success btn-lg" name="submit">Create an Account</button>
										</form>
									
									 	</div>
						                   
					 
	
	       </div>
		   </div>
		   
		      <?php require 'footer.php';	?>
		 </body>
		           <link href='https://fonts.googleapis.com/css?family=Sirin+Stencil' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=IM+Fell+English+SC' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=Mada' rel='stylesheet' type='text/css'>
		 
		 
						  </html>