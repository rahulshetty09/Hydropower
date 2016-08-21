<?php
                       session_start() ;
				       include('db.php');
												
															            $login = false;
																		
																		if(isset($_SESSION['user']))
																		{                    $user = $_SESSION['user'];
                        																	$sql = "Select * from register where Email = '$user'";
												                                        	$r= mysqli_query($con,$sql);
												                                          	while($res=mysqli_fetch_array($r))
																							{
																							  $name = $res['Firstname'];	
																							  $last = $res['Lastname'];
														                                      $add = $res['Address'];
																							  $no  = $res['phne'];
																							  $login = true;
												                    	                      }	
                                                                                     $array = array($login , $name , $last , $add , $no , $user );	
                                                                                      echo json_encode($array);																					 
																		}else
																		{
																			          echo json_encode(false);
																		}
													
                                                                                             													
																				
						?>	