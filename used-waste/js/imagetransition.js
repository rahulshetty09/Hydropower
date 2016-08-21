$(document).ready(function(){
	var animated = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	
	
	$('#services-pipelining1').hover(function(){
       

  	   $('#services-header1').addClass('fadeInLeftBig animated').one(animated, function(){
		$('#services-header1').removeClass('fadeInLeftBig animated');	
		});
		
		
		
		$('#services-text1').addClass('zoomIn animated').one(animated, function(){
		$('#services-text1').removeClass('zoomIn animated');	
		});
		
});


	$('#services-pipelining2').hover(function(){
       

	    $('#services-header2').addClass('zoomInDown animated').one(animated, function(){
		$('#services-header2').removeClass('zoomInDown animated');	
		});
		
		
		$('#services-text2').addClass('zoomIn animated').one(animated, function(){
		$('#services-text2').removeClass('zoomIn animated');	
	    });
});


	$('#services-pipelining3').hover(function(){
        
		
		$('#services-header3').addClass('fadeInRightBig animated').one(animated, function(){
		$('#services-header3').removeClass('fadeInRightBig animated');	
		});
		
		
		$('#services-text3').addClass('zoomIn animated').one(animated, function(){
		$('#services-text3').removeClass('zoomIn animated');	
	    });
});

});