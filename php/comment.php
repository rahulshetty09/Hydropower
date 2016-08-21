	
		<?php										
								if($_POST['done'])					
								{		
													$name  =  $_POST['namephp'];
													$com  =   $_POST['commentphp'];
													$date = date('Y-m-d').' '.date('H:i:s');
													 
													include('db.php');
													
													$query = "insert into comments(name,comments,date) values('$name','$com','$date')";
													$row = mysqli_query($con,$query);
								}
								exit();
			?>												
										
