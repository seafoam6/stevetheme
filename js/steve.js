(function($){
   $('#menu-toggle-bar, #menu-toggle').on('click',function(e){
   	e.preventDefault;
   	$('body').toggleClass('menu-show');
   });
  
})(jQuery);