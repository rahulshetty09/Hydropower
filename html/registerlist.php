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
						<link rel="stylesheet" href="../css/registerlist.css" />
					  <link rel="stylesheet" href="../css/footer.css" />
					  <link rel="stylesheet" href="../font-awesome/css/font-awesome.css" />
					   <link rel="stylesheet" href="../css/loader.css" />
	
					  
					  <script type="text/javascript">
				$(document).ready(function(){	  
					    $('#login').append( "<div class=\"loginname\"><button type=\"button\" class=\"btn btn-default\" id = \"logoutbutton\">Logout&nbsp&nbsp<i "
											+ " class=\"fa fa-check-circle-o\" aria-hidden=\"true\"></i></button> </div>");									 
								             
							$("a").css("cursor","arrow").click(false);
							
							   $("#logoutbutton").click(function(){
									window.location.replace('../php/adminlogout.php');
								 });	
						$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	
});
					</script>
	</head>
	
	
	<body>
	<div class="se-pre-con"></div>
	<?php include('headertry.php');  ?>
	
	<h3 class="welcome">Register Users</h3>
	            
				
				
				
	<div class="container table-responsive" id="table">
	<table class="table table-striped table-bordered">
	 <thead>
      <tr>
	      <th>Sr no.</th>
		    <th>Firstname</th>
        <th>Lastname</th>
		  <th>Email</th>
        <th>Address</th>
		  <th>Phone no.</th>
		  <th>Password</th>
      </tr>
    </thead>
    <tbody>
	
	<?php
	
	include('../php/db.php');
	
	$sql='Select * from register';
			  
	$r = mysqli_query($con,$sql);
     
	 if(! $r)
     {
		die('Could not get data: ' . mysql_error());
	}
	
	$count=1;
	while($res=mysqli_fetch_array($r))
	{
		
		$first = $res['Firstname'];
		$last = $res['Lastname'];
		$email = $res['Email'];
		$add = $res['Address'];
		$phone = $res['phne'];
		$pass = $res['Password'];
		
		
	
		
		 echo "<tr><a><td>".$count."</td><td>".$first."</td><td>".$last."</td><td>".$email."</td><td>".$add."</td><td>".$phone."</td><td>".$pass."</td></a></tr>";
		 $count++;
		
	}
	
	  ?>
    </tbody>
	</table>
	</div>
  
  
      <div class="container-fluid">
	  
	        <div class="row">
	  
	              <div class="col-md-6">
	                   <div class="delete">
				          <div class="header-delete">
						            DELETE ACCOUNT
                       </div>
                      <div  class="subtext-delete subtext">
                        Enter the email-address of account to be deleted					  
						   </div>
						   
						   <form method="POST" action="../php/deleteaccount.php">
						   
						   <div class="form-group">
													 <div class="input-group password">
													 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
													<input type="email" class="form-control" name="emaildelete" placeholder="Email" required>
										           </div>
										  </div>
						   
						   
								  <center> <button type="submit" class="btn btn-success"  name="delete">Delete</button></center>
							</form>
							</div>
	          </div>
			  
			  
			  <div class="col-md-6">
	                    <div class="edit">
				          <div class="header-edit">
						            EDIT ACCOUNT
                       </div>
                      <div  class="subtext-delete subtext">
                        Enter the email-address of account to ne edited				  
						   </div>
						   
						   <form method="POST" action="edit.php">
						   
						   <div class="form-group">
													 <div class="input-group password">
													 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
													<input type="email" class="form-control" name="emailedit" placeholder="Email" required>
										           </div>
										  </div>
						   
						   
								  <center> <button type="submit" class="btn btn-success "   name="edit">Edit</button></center>
							</form>
	          </div>
			  </div>
			  
			  
	  </div>
  
  </div>
  
	
	
	<?php include('footer.php');  ?>
	</body>
	</html>