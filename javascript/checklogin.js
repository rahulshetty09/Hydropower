 $(document).ready(function(){
			qwerty();
			
				 $('#servicebutton').click(function(){
						if($('#list').css("display") =="block") 
								$('#list').css("display","none");
						else
								$('#list').css("display","block");
				 });
            
			   												
										   
});                
						 
						 
						 
function qwerty(){
	        
			 $.ajax({
							url : '../php/checklogin.php',
							type : "POST" ,
							async : false,
					        success:function(result){
								                  res = JSON.parse(result);
												 
							                      if(res[0] == true) 
											     {
												    $('#Firstname').val(res[1]);
									                $('#Lastname').val(res[2]);
										            $('#Address').val(res[3]);
										            $('#phne').val(res[4]);
										            $('#Email').val(res[5]);
												    $('#login').append( "<div class=\"loginname\"> Welcome "+res[1]+" </div>");
                                                											 
								             }else{
											
										$('#login').append("<center><button type=\"button\" class=\"btn btn-default\" id = \"registerbutton\">Register&nbsp&nbsp<i class=\"fa fa-check-circle-o\" aria-hidden=\"true\"></i></button></center>");
	
											 };
							}										
								});    
	
}	




