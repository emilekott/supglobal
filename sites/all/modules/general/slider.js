(function($) {

    $(document).ready(function(){
  
        $(".view-caroufredsel .view-content").carouFredSel({
            width: '100%',
            height: 'auto',
            items: {
                visible: 3,
                start: -1
            },
            scroll: {
                items: 1,
                duration: 600,
                timeoutDuration: 3500
            },
            prev: '#carou-prev',
            next: '#carou-next',
         
            swipe : {
                items: 1,
                onTouch : true
            }

        });



    });


})(jQuery);