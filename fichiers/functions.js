 $(function(){
   $(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
      if ($(this).scrollTop() > 500) { //si on a défilé de plus de 200px du haut vers le bas
          $('#index-navbar').addClass("navbar-fixed-top"); //on ajoute la classe "fixNavigation" à <div id="navigation">
      } else {
      $('#index-navbar').removeClass("navbar-fixed-top");//sinon on retire la classe "fixNavigation" à <div id="navigation">
      }
   });
 });

$(document).ready(function() {
    $('#header-logo a').on('click', function() { 
			var page = $(this).attr('href'); 
			var speed = 1400; 
			$('html, body').animate( { scrollTop:
      $(page).offset().top }, speed );
			return false;
    });
});