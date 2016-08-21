				 
<?php
						if(isset($_POST['display']))
						{
							include('db.php');
							
							$query2 = "SELECT * FROM comments ORDER BY id desc LIMIT 3";
		                    $row2 = mysqli_query($con,$query2);

							
							while($r=mysqli_fetch_array($row2))
							{
								?>
								
								<div class="row">
								<div class="col-md-2">
								<div class="dp" id="dp1"></div>
								</div>
								<div class="comments col-md-8">
						       <span class="comment-text"> <?php echo $r['comments']  ?></span>
							  
								<span class="commenter"> -<?php echo $r['name']  ?></span>
								</div>
                			</div>		  
							 <?php
			                }
							
			                 
                         exit();
						}
?>	