(function($){
   $('#menu-toggle-bar, #menu-toggle').on('click',function(e){
   	e.preventDefault;
   	$('body').toggleClass('menu-show');
   });
  var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'wilhelm.mp3');
        var isPlaying = false
  $( window ).resize(function() {
    if (!isPlaying){
      isPlaying=true;
      audioElement.play();
      isPlaying=false;
    }
  });
})(jQuery);