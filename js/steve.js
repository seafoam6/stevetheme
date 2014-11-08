(function($){
   $('#menu-toggle-bar, #menu-toggle').on('click',function(e){
   	e.preventDefault();
   	$('body').toggleClass('menu-show');
   });
   $('.current-menu-item a').attr("href", "#");
function resizeNav(){
  var bodH = $(document).height();
  $('.main-nav').height(bodH);
  $('.wrapper').height(bodH);
}
  
  $(document).on('scroll', resizeNav());
})(jQuery);