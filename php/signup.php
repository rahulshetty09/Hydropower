<?php
        session_start();
        include('db.php');
		if(isset($_POST['Submit']))
		{
				
					$Firstname = $_POST['Firstname'];
					$Lastname = $_POST['Lastname'];
					$Address = $_POST['Address'];
					$Email = $_POST['EmailId'];
					$phne = $_POST['phne'];
					$Password = $_POST['Password'];
					
					$query = "insert into register values('$Firstname','$Lastname','$Address','$Email','$phne','$Password')";
					
					$res = mysqli_query($con,$query);
					
							if($res)
							{
								     $_SESSION['user'] = $Email;
									header('Location:../html/index.php');									 
							}
							else
							{
								
							}	

        }



?>
