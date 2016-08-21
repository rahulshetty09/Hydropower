<?php session_start() ;

	   ?>
<html>
		<head>
		
			<title>header</title>
			        
			       <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
                   <meta content="utf-8" http-equiv="encoding">
					    <meta charset="utf-8"/>
					  
					   
					 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
					    <script src="../javascript/jquery.js"></script>
					    <script src="../bootstrap/js/bootstrap.min.js"></script>
				      <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=Sirin+Stencil' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
					  <link href='https://fonts.googleapis.com/css?family=IM+Fell+English+SC' rel='stylesheet' type='text/css'>
					 <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
					 <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
					 <link href='https://fonts.googleapis.com/css?family=Hind+Madurai:400,500' rel='stylesheet' type='text/css'>
					 <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
					 <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" />
					<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
					<script src="../javascript/servicevalidate.js"></script>
					 <link rel="stylesheet" href="../css/animate.css" />
					  
						 <link rel="stylesheet" href="../css/an.css" />
					 <link rel="stylesheet" href="../css/header.css" />
					  <link rel="stylesheet" href="../css/services.css">
					  <link rel="stylesheet" href="../css/footer.css" />
					   <link rel="stylesheet" href="../css/loader.css" /> 	   
					
					            
				            	<script type="text/javascript">
														var log;
													   $(document).ready(function(){
																 
														 log =  JSON.parse( "<?php echo json_encode (isset($_SESSION['user']));   ?>");
														 
														 if(log)
														 {
															 //submit data
															 $('.form-above').css('visibility','hidden');
															 $("#myFieldset").removeAttr("tooltip");
														 }
														 else
														 {
															 $("#myFieldset").attr("disabled","disabled");
														 };
														 
														 $(window).load(function() {
		
															$(".se-pre-con").fadeOut("slow");;
														});

														
														
									 
									 
								   });		           
						</script>
						  <script src="../javascript/services.js"></script>
					   
					
					
					
					
		</head>
		<body>
		        <div class="se-pre-con"></div>
				<?php require 'headertry.php';	?>
							
							<div class="page-header">
									<h1>PIPELINING&nbsp&nbsp <small>services</small></h1>
							</div>



				<div class="container-fluid layer1">
						<div class="row layer2">
											<div class="col-md-8">
																<div class="outercover" onmouseleave="dothis()">
											
																					<div class="innercover animated">
																					<h3 class = "service-header animated">PIPING</h3>
																					<div class="underline"></div>
																				   <div class="service-text animated">Lorem ipsum dolor sit amet, id mea dolore propriae 
																										 sapientem, in nec quem option elaboraret, ei oratio iudicabit democritum usu.
																										 Sed vitae doming quaeque ex. Facer nonumy patrioque quo
																					</div>
																					</div>
													         </div>						   
											</div>				   

											
											
											<div class="form col-md-4">
											
											      <div class="form-above">To fill the form,please <a href="register.php">SIGN UP</a> or <a href ="login.php">LOGIN</a></div>
											
											
													<div class="panel panel-primary" id="form-cover">
																		<div class="panel-heading" id="form-heading"><h2>Service  Form</h2></div>
																				<div class="panel-body" id="form-content">
														                        
																							<form id="serviceform">
																							                 <fieldset id="myFieldset" tooltip="Please signup/login to fill this service form"> 
																											<div class="form-group">
																													<div class="input-group">
																													<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
																													  <input type="text" class="form-control input-lg" name="Firstname" id="Firstname" placeholder="First Name" >
																												   </div>
																												   </div>
																												   <div class="form-group">
																													<div class="input-group">
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
																							        
																									
																									<center>
																											<div class="btn-group">
																														<button type="button" class="btn btn-default btn-primary btn-lg" aria-haspopup="true" aria-expanded="false" id="servicebutton">
																																					OUR SERVICES <span class="caret"></span>
																														</button>
																											</div>
																										</center>
																																			
																																			<table id="list">
																																			
																																				<tr>		
																																							<td><input name="check" type="checkbox" value="Tank Cleaning">&nbsp&nbspTank Cleaning</td>
																																							<td><input name="check"  type="checkbox" value="Pump Installation" >&nbsp&nbspPump Installation</td>
																																			   </tr>
																																			   
																																			   
																																			   <tr>		
																																							<td><input name="check"  type="checkbox" value="Solar Products">&nbsp&nbspSolar Products</td>
																																							<td><input name="check"  type="checkbox" value="Rain Water Harvesting" >&nbsp&nbspRain Water Harvesting</td>
																																			   </tr>
																																			   
																																			   <tr>		
																																							<td><input name="check"  type="checkbox" value="Pump Maintenance & Services">&nbsp&nbspPump Maintenance & Services</td>
																																							<td><input  name="check" type="checkbox" value="Electrical & Plumbing Contracts" >&nbsp&nbspElectrical & Plumbing Contracts</td>
																																			   </tr>
																																			   
																																			   <tr>		
																																							<td><input name="check"  type="checkbox" value="Borewell Drilling & Installation">&nbsp&nbspBorewell Drilling & Installation</td>
																																							<td><input name="check"  type="checkbox" value="Automatic Level Controller with sensor" >&nbsp&nbspAutomatic Level Controller with sensor</td>
																																			   </tr>
																																			
																																	</table>
																																	
																																	
																																	<div class="form-group">
																											                  <textarea class="form-control" name="Description" id="description"  rows="3" placeholder="Description"></textarea>
																											             	   </div>
																															   
																															   
																															   <input type="hidden" id ="hidden"  />
																															   
																															  
																												
																										<center> <button type="submit" class="text-center btn btn-success btn-lg" id="submit"  name="submit">Submit</button></center>
																							</fieldset>            
																					  </form>
																		           
																				</div>
																</div>
											</div>
													
						</div>
				</div>
				                                                                                <div class="modal fade" tabindex="-1" role="dialog">
																															  <div class="modal-dialog">
																																<div class="modal-content">
																																  <div class="modal-header">
																																	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																																	<h4 class="modal-title">THANK YOU</h4>
																																  </div>
																																  <div class="modal-body">
																																	<p>Thank You for giving us a chance to serve you. </p>
																																  </div>
																																  <div class="modal-footer">
																																	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																																	
																																  </div>
																																</div><!-- /.modal-content -->
																															  </div><!-- /.modal-dialog -->
																										</div><!-- /.modal -->
				
		         <?php require 'footer.php';	?>
		</body>
</html>