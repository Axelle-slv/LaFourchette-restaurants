 $(function(){
   $(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
      if ($(this).scrollTop() > 200) { //si on a défilé de plus de 200px du haut vers le bas
          $('.navbar').addClass("navbar-fixed-top"); //on ajoute la classe "fixNavigation" à <div id="navigation">
      } else {
      $('.navbar').removeClass("navbar-fixed-top");//sinon on retire la classe "fixNavigation" à <div id="navigation">
      }
   });
 });