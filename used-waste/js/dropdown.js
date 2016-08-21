$(function () {    
  
  
  $('#servicehover').hover(function () {
     clearTimeout($.data(this));
     $('ul', this).slideDown(600);
  }, 
  
  
  
  function () {
    $.data(this, setTimeout($.proxy(function() {
      $('ul', this).slideUp(600);
    }, this), 200));
  }
  );
});

