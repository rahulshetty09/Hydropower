$(document).ready(function() {	
	
	 $('#login').append("<div class=\"loginname\"><button type=\"button\" class=\"btn btn-default\" id = \"registerbutton\">Register&nbsp&nbsp<i class=\"fa fa-check-circle-o\" aria-hidden=\"true\"></i></button></div>");
	 $("#registerbutton").on("click",function(){
		window.location.replace("register.php");
	});
	
	 $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	 
	$("#loginform").validate({

      rules: {
	  
				  	  EmailId:{
											  required:true,
											  email :true
										  },
										  
				  Password:{
							  required:true,
						     minlength : 7		  
						 },
				 },
                     messages: {
		  

							  EmailId:{
										  required: "Please enter your email-Address",
										  email : "Please enter a valid email-Address"
									  },
									  
									  Password:{
										  required: "Please enter your Password",
										
										   minlength : "Password must be atleast 7 character long"  
									  },
		 
		    },
			
			
			
			 highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
            },
		
		 errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
	   
		 
		
         
   });
});