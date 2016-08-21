$(document).ready(function() {	

 

	$("#serviceform").validate({

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
										
										  
										 check:{
											  required:true,
											  
										  },
										  
										 
										  
										  Description:{
										   required:true,
										   minlength:10
												
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
									  
									  
									  check:{
										  required: "Please check atleast one option",
										
										
									  },
									  
									 
									  
									  Description:{
										  required: "Please fill the description of your service",
										  minlength:"Characters greater than 10"
									  },
		  
         },
		 
		
		 

         submitHandler : function(){
			 
			 var fn = $("#Firstname").val();
			 var ln = $("#Lastname").val();
			 var add = $("#Address").val();
			 var phne = $("#phne").val();
			 var des = $("#description").val();
			 var email = $("#Email").val();
			 
			  var aChecked = $("form input:checkbox:checked"); // assumes your checkboxes are in a form tag
              var aValues = [];
               aChecked.each(function(index){
               aValues[index] = aChecked[index].value;
			   });
			   
			   $.ajax({
				   
				   url  : "../php/serviceform.php",
                   async : false,
                   type : "POST" ,
				   data : {
								        "fn" : fn ,
										"ln" : ln,
										"add" : add,
										"des" :  des,
										"phne" : phne,
										"email" : email,
										"choice[]" : aValues
							},
					        success:function(data){
								 
								$('.modal').modal('show');
							}		
				});				   
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
