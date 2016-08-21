<?php 

session_start();
  
           if(isset($_SESSION['admin']))
		{
			
		}
         else{
			 
			 header('Location:adminlogin.php');
		 };
		 
		 if(isset($_POST['delete']))
		 {  

         	 include('db.php');
			 $email = $_POST['emaildelete'];
			 $sql ="delete from register where Email='$email'";
			 $r = mysqli_query($con,$sql);
			 if(mysqli_num_rows($r))
			 {
				 header('Location:../html/registerlist.php');
				 
			 }
			 else{
				 echo "Email Invalid or Some Error Occured....Click to redirect to <a href=\"../html/registerlist.php\">Register List</a>";
				};
		 
			 
			 
		 }
?>