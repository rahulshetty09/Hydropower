$(document).ready(function(){
	//initial
	
	$('.content-white').load('signup.php');
	
	//clicks
	$('.maincontent .navy li a').click(function(){
					var page = $(this).attr('href');
				
					   
				  	if(page=='signup')
					{
				
						$("#signupitem").addClass("active");
						$("#loginitem").removeAttr("class");
					}
					else{
					
						$("#loginitem").addClass("active");
						$("#signupitem").removeAttr("class");	
					}  
						
		
				
						$('.content-white').load(page+'.php');
						return false;
	
	});
	
	
});