$(document).ready(function() {	

	
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});

	$("#adminlogin").validate({

      rules: {
		  
										 Firstname:{
											  required:true,
											  minlength:3,
											  allalpha:true
										  },
										  
										 Lastname:{ 
										 required:true,
										 allalpha:true,
										 minlength:3
										 },
										  
										  Address:{
											  required:true,
											  minlength:15
										  },
										  
										  EmailId:{
											  required:true,
											  email :true
										  },
										  
										  
										   phne:{
											  required:true,
											    digits:true,
										         minlength:10,
										         maxlength:10
										  },
										
										  
										  Password:{
											  required:true,
											   minlength : 7		  
										  },
										  
										 
										  
										
										  
         },
         messages: {
										Firstname:{
										  required: "Please enter your Firstname",
										  minlength:"Firstname should be atleast 3 character long"
									  },
										
									  
									 Lastname:{
										  required: "Please enter your Lastname",
										  minlength:"Firstname should be atleast 3 character long"
									  },
									  
									  Address:{
										  required: "Please enter your Address",
										  minlength:"Characters greater than 15"
									  },
									  
									  EmailId:{
										  required: "Please enter your email-Address",
										  email : "Please enter a valid email-Address"
									  },
									  
									   phne:{
										  required: "Please enter your Phone-number",
										  digits:"Please enter a valid phone number",
										  minlength:"Phone number should be exactly 10 digits",
										  maxlength:"Phone number should be exactly 10 digits"
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

$.validator.addMethod('allalpha',
                 function(value){
					                 return /^[A-z]+$/.test(value);
				 },
				 "All inputs should be aphabets"
);






