(function($) {

    $(document).ready(function(){
  
        $(".flexslider").hover(
            function(){
               
                $(this).find(".flex-prev").animate({
                    opacity:"0.8"
                });
                $(this).find(".flex-next").animate({
                    opacity:"0.8"
                });
              
            },
            function(){
             
                $(this).find(".flex-prev").animate({
                    opacity:"0"
                });
                $(this).find(".flex-next").animate({
                    opacity:"0"
                });
              
            }
            );



    });


})(jQuery);