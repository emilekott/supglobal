

(function($) {

  $(document).ready(function(){

    $(function(){
      $('#section-header').data('size','big');
    });

    $(window).scroll(function(){
      var $header = $('#section-header');
      var $logo = $('img#logo');
      var $nav = $('nav.navigation')
      var $hero = $('#hero');
      if ($('body').scrollTop() > 0) {
        if ($header.data('size') == 'big') {
          $header.data('size','small').stop().animate({
            height:'55px'
          }, 600);
          $logo.stop().animate({height:'44px'}, 600);
          $nav.stop().animate({margin: '15px 0 0 0'}, 600);
          $hero.stop().animate({margin: '59px 0 30px 0'}, 600);
        }
      } else {
        if ($header.data('size') == 'small') {
          $header.data('size','big').stop().animate({
            height:'80px'
          }, 600);
          $logo.stop().animate({height:'71px'}, 600);
          $nav.stop().animate({margin: '35px 0 0 0'}, 600);
          $hero.stop().animate({margin: '84px 0 30px 0'}, 600);
        }  
      }
    });

  });


})(jQuery);