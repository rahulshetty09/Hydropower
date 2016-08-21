<?php
session_start();

		if(isset($_SESSION['admin']))
		{
			$email = $_POST['emailedit'];
			include('../php/db.php');
	
           	$sql="Select * from register where Email = '$email'";
			  
	        $r = mysqli_query($con,$sql);
     
	 if(! $r)
     {
		echo "Email Invalid or Some Error Occured....Click to redirect to <a href=\"../html/registerlist.php\">Register List</a>";
	}
	else{
		while($res=mysqli_fetch_array($r))
	{
		
		$first = $res['Firstname'];
		$last = $res['Lastname'];
		$email = $res['Email'];
		$add = $res['Address'];
		$phone = $res['phne'];
		$pass = $res['Password'];
		}
	}   
		}
		
		
		
		
		 if(isset($_POST['Submit']))
		 {  include('../php/db.php');
             $first = $_POST['Firstname'];
		    $last = $_POST['Lastname'];
		   $email = $_POST['EmailId'];
		   $add = $_POST['Address'];
		  $phone = $_POST['phne'];
		  $pass = $_POST['Password'];
         	 include('db.php');
			 $sql ="delete from register where Email='$email'";
			 $r = mysqli_query($con,$sql);
			 if($r)
			 {
				 $query = "insert into register values('$first','$last','$add','$email','$phone','$pass')";
					
				$res = mysqli_query($con,$query);
				 header('Location:registerlist.php');
			 }
			 else{
				 echo "Email Invalid or Some Error Occured....Click to redirect to <a href=\"../html/registerlist.php\">Register List</a>";
				};
		 
			 
			 
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
						<link rel="stylesheet" href="../css/registerlist.css" />
					  <link rel="stylesheet" href="../css/footer.css" />
					  <link rel="stylesheet" href="../font-awesome/css/font-awesome.css" />
					  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
						<script src="../javascript/editvalidation.js"></script>
						 <link rel="stylesheet" href="../css/loader.css" />
	
					  
				<script type="text/javascript">
				$(document).ready(function(){	  
					    $('#login').append( "<div class=\"loginname\"><button type=\"button\" class=\"btn btn-default\" id = \"logoutbutton\">Logout&nbsp&nbsp<i "
											+ " class=\"fa fa-check-circle-o\" aria-hidden=\"true\"></i></button> </div>");									 
								             
							
							$("a").css("cursor","arrow").click(false);
						  var fn ="<?php Print($first); ?>";
                        
      						var ln ="<?php Print($last); ?>";
							
							var add="<?php Print($add); ?>";
						
     						var phne="<?php Print($phone) ; ?>";
							var email="<?php Print($email); ?>";
							var pass= "<?php Print($pass); ?>";
							
							
							$('#Firstname').val(fn);
							 $('#Lastname').val(ln);
				            $('#Address').val(add);
				            $('#phne').val(phne);
				            $('#Email').val(email);
							$('#Password').val(pass);
				
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
							
							
});
					</script>
					
					
					
					
					
					<style type="text/css">
					    
                #adminlogin
				{
					width: 70%;
					border : 1px solid grey; 
					margin : 15px auto;
					padding : 20px;
				}	

           .welcome{
			   margin-top : 150px ;
			   font-size : 20px;
			   text-align : center;
			   
		   }				
					</style>
	</head>
	<body>
	<div class="se-pre-con"></div>
	<?php include('headertry.php');  ?>
	
	<div class="welcome">Change the required details</div>
	<form id="adminlogin" action="#" method="POST">
                                
									
							            <div class="form-group">
													<div class="input-group firstname">
														<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
													  <input type="text" class="form-control input-lg" name="Firstname" id="Firstname" placeholder="First Name" >
												   </div>
												   </div>
												   
												   <div class="form-group">
													<div class="input-group lastname">
														<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
													  <input type="text" class="form-control input-lg" name="Lastname" id="Lastname"  placeholder="Last Name">
													</div><!-- /input-group -->
												 </div>
											
											
											<div class="form-group">
													 <div class="input-group">
													<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
													<input type="email" class="form-control input-lg" name="EmailId" id="Email" placeholder="Email">
												  </div>
											</div>
											
											<div class="form-group">
					                   <textarea class="form-control" name="Address" id="Address"  rows="3" placeholder="Address"></textarea>
									       </div>
										   
										   <div class="form-group">
													 <div class="input-group phone">
													<span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
													<input type="tel" class="form-control input-lg" name="phne" id="phne"  placeholder="Contact No">
												  </div>
											</div>
										 
									     
									   
									       <div class="form-group">
													 <div class="input-group password">
													 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
													<input type="text" class="form-control input-lg" name="Password" id="Password" placeholder="Password">
										           </div>
										  </div>
										  
										  
									
											<div class="text-center">
													<button type="submit" class="text-center btn btn-success btn-lg" name="Submit">Make Changes</button>				
									    </div>
						  </form>
	
	
	<?php include('footer.php');  ?>
	</body>
	</html>