(function($){
   $('#menu-toggle-bar, #menu-toggle').on('click',function(e){
   	e.preventDefault;
   	$('body').toggleClass('menu-show');
   });
   $('.current-menu-item a').attr("href", "#");
  
})(jQuery);