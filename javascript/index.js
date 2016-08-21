 $(document).ready(function(){
		 qwerty();  
		 
		 $("#registerbutton").on("click",function(){
		window.location.replace("register.php");
	});
	
	
	$("#logoutbutton").click(function(){
		window.location.replace('../php/logout.php');
	 });
	 
	 $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});

	
});                
						 
						 
						 
function qwerty(){
	        
			 $.ajax({
							url : '../php/index.php',
							type : "POST" ,
							async : false,
					        success:function(res){
								                
												  result = JSON.parse(res);
												 
							                      if(result[0] == true) 
											     {
													 
													 var first = result[1].charAt(0).toUpperCase();
													 var last = result[2].charAt(0).toUpperCase();
											$('#login').append( "<div class=\"loginname\"> <div class=\"letters\">"+first+"&nbsp"+last+"</div><button type=\"button\" class=\"btn btn-default\" id = \"logoutbutton\">Logout&nbsp&nbsp<i "
											+ " class=\"fa fa-check-circle-o\" aria-hidden=\"true\"></i></button> </div>");
                                                											 
								                 }else{
											        
						$('#login').append("<div class=\"loginname\"><button type=\"button\" class=\"btn btn-default\" id = \"registerbutton\">Register&nbsp&nbsp<i class=\"fa fa-check-circle-o\" aria-hidden=\"true\"></i></button></div>");
											    };
							}										
								});    
	
};						 