$(document).ready(function(){
	
	
	qwerty();
	
	
	$("#registerbutton").on("click",function(){
		window.location.replace("register.php");
	});
			
	 $('#servicebutton').click(function(){
						if($('#list').css("display") =="block") 
								$('#list').css("display","none");
						else
								$('#list').css("display","block");
	 });
	
	
	 $("#logoutbutton").on("click",function(){
		 alert();
		window.location.replace("../php/logout.php");
     });
	
	var animated = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	
	$('.innercover').css('visibility','hidden');
	$('.outercover').hover(function(){
       $('.innercover').css('visibility','visible');
       $('.innercover').addClass('slideInRight');
		
		

		$('.service-header').addClass('flip').one(animated, function(){
		$('.service-header').removeClass('flip');	
		});
		
		
		
		$('.service-text').addClass('bounceIn').one(animated, function(){
		$('.service-text').removeClass(' bounceIn');	
		});
		});
		
		
		
		
		
});

function dothis(){
			$('.innercover').removeClass('slideInRight');
			$('.innercover').addClass('fadeOut');
			
		};

		
		
		
						 
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
													
													
													var first = res[1].charAt(0).toUpperCase();
													 var last = res[2].charAt(0).toUpperCase();
												   $('#login').append( "<div class=\"loginname\"> <div class=\"letters\">"+first+"&nbsp"+last+"</div><button type=\"button\" class=\"btn btn-default\" id = \"logoutbutton\">Logout&nbsp&nbsp<i "
											+ " class=\"fa fa-check-circle-o\" aria-hidden=\"true\"></i></button> </div>");									 
								             }else{
											
										$('#login').append("<div class=\"loginname\"><button type=\"button\" class=\"btn btn-default\" id = \"registerbutton\">Register&nbsp&nbsp<i class=\"fa fa-check-circle-o\" aria-hidden=\"true\"></i></button></div>");
	
											 };
							}										
								});    
	
}	


		
