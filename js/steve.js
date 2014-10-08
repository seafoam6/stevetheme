(function($){
   $('#menu-toggle-wrapper').on('click',function(e){
   	e.preventDefault;
   	$('.wrapper').toggleClass('menu-show');
   	$('#menu-toggle-wrapper').toggleClass('nav-hide');
   });
   $('#menu-toggle').live('click', function(e) {  
        $('.wrapper').toggleClass('menu-show');
   	$('#menu-toggle-wrapper').toggleClass('nav-hide');
    });
})(jQuery);