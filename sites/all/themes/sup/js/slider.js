(function($) {

    $(document).ready(function(){

        $(".flexslider").hover(
            function(){
                $(this).find(".views-field-field-description").animate({bottom:"2px"});
                $(this).find(".flex-prev").animate({opacity:"0.8"});
                $(this).find(".flex-next").animate({opacity:"0.8"});
                $(this).find(".views-field-field-link img").animate({opacity:"0.5"});
            },
            function(){
                $(this).find(".views-field-field-description").animate({bottom:"-130px"});
                $(this).find(".flex-prev").animate({opacity:"0"});
                $(this).find(".flex-next").animate({opacity:"0"});
                $(this).find(".views-field-field-link img").animate({opacity:"0"});
            }
        );
            
        $(".views-field-field-link img").hover(
            function(){
                $(this).animate({opacity:"1"});
            },
            function(){
                $(this).animate({opacity:"0.5"});
            }
        );
            
             $(".flex-direction-nav a").hover(
            function(){
                $(this).css({opacity:"1"});
            },
            function(){
                $(this).css({opacity:"0.8"});
            }
        );
            


    });


})(jQuery);