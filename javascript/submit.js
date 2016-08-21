$(document).ready(function(){       
			 displayfromdatabase();
		
		
		$( "#submit" ).click(function() {
				 
				name = $('#commentname').val(),
				comment = $('#commentopen').val(),
				
				$.ajax({
							url : '../php/comment.php',
							type : "POST" ,
							async : false,
							data : {
								        "namephp" : name ,
										"commentphp" : comment,
										"done" : 1
							},
					        success:function(data){
								 $('#commentname').val(''),
								 $('#commentopen').val(''),
								 displayfromdatabase();
								
							}		
				});
				
		  });	
           
				
  });

  
function displayfromdatabase() {
				
	$.ajax({
	url : '../php/comment2.php',
	type : "POST" ,
	async : false,
	data : {
	       "display" : 1
			  },
	 success:function(d){
							$('#commentjumbo').html(d);
							}
				});
};	
				
					
       