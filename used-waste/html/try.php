
<html>
	<head>
		<title>Form Validation</title>
		
                 <meta charset="utf-8">
					  <meta name="viewport" content="width=device-width, initial-scale=1">
					  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
					   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
					  
					    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
						<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
						<script src="../javascript/code.js"></script>
	
		           <link rel="stylesheet" href="../css/header.css"  type="text/css"  />
					  <link rel= "stylesheet" href="../css/login.css" type="text/css" />
					  <link rel="stylesheet" href="../css/footer.css"  type="text/css"  />			  
		</head>
		
		
		<body>
		
		   <?php require 'headertry.php';	?>
		
		                                  <div class="jumbotron container-fluid maincontent">
									

									<ul class="nav nav-tabs nav-justified navy">
											  <li role="presentation" id="signupitem"  class="active"><a href="#">Register</a></li>
											  <li role="presentation" id="loginitem"><a href="try2.php" >Login</a></li>
									</ul>
											
									<div class="content-white">
									<form id="register" method="POST" action="../php/signup.php">      
							            <div class="form-group">
													<div class="input-group firstname">
													  <input type="text" class="form-control input-lg" name="Firstname" id="Firstname" placeholder="  First Name" >
												   </div>
												   </div>
												   <div class="form-group">
													<div class="input-group lastname">
													  <input type="text" class="form-control input-lg" name="Lastname" id="Lastname"  placeholder="Last Name">
													</div><!-- /input-group -->
												 </div>
											
											
											<div class="form-group">
													 <div class="input-group">
													<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
													<input type="email" class="form-control input-lg" name="EmailId" id="Email-Id" placeholder="Email">
												  </div>
											</div>
											
					                   <textarea class="form-control" name="Address" id="Address"  rows="3" placeholder="Address"></textarea>
									       
										   <div class="form-group">
													 <div class="input-group phone">
													<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
													<input type="tel" class="form-control input-lg" name="phne" id="phne"  placeholder="Contact No">
												  </div>
											</div>
										 
									       <div class="form-group">
													 <div class="input-group username">
													<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
													<input type="text" class="form-control input-lg" name="Usern" id="Usern" placeholder="Username">
												   </div>
											</div>
									   
									       <div class="form-group">
													 <div class="input-group password">
													 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
													<input type="password" class="form-control input-lg" id="Pass" name="Password" id="Password" placeholder="Password">
										           </div>
										  </div>
										  
										  
										  <div class="form-group">
													 <div class="input-group password-confirm">
													 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
													<input type="password" class="form-control input-lg" name="PasswordConfirm" id="Password-Confirm" placeholder="Confirm password">
										          </div>
										  </div>
										  
										  
										  
										
											<div class="text-center">
													<button type="submit" class="text-center btn btn-success btn-lg" name="Submit">Create an Account</button>				
									   
	                      </div>
						  </form>
						  	</div>
						                   
					 
	
	       </div>
		   
		   
		      <?php require 'footer.php';	?>
		 </body>
		           <link href='https://fonts.googleapis.com/css?family=Sirin+Stencil' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=IM+Fell+English+SC' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=Mada' rel='stylesheet' type='text/css'>
		 
		 
						  </html>
		
		