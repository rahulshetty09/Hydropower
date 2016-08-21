<?php
        session_start();
        include('db.php');
		        
				
					$fn = $_POST['fn'];
					$ln = $_POST['ln'];
					$add = $_POST['add'];
					$email = $_POST['email'];
					$phne = $_POST['phne'];
					$des = $_POST['des'];
					$arr = $_POST['choice'];
					
					$service = implode( " , " , $arr);
					
				     
                     $date = date("Y-m-d H:i:s");
                     $message = 1;					 
					$query = "insert into service values('$fn','$ln','$add','$email','$phne','$service','$des','$date','$message')";
					
					$res = mysqli_query($con,$query);
					
							if($res)
							{
								  echo "hua kaam";						 
							}
							else
							{
								echo "hsc details not inserted" ;
							}	

        



?>
