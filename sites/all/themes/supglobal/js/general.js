

(function($) {

    $(document).ready(function(){

        $("#search-button-toggle").click(
            function(){
                
                $("form#search-block-form").fadeIn();
                $(this).fadeOut();
                $("form#search-block-form input.form-text").focus();
                
            }
            );
         
        $("form#search-block-form").focusout(
            function(){
                $("#search-button-toggle").fadeIn();
                $("form#search-block-form").fadeOut();
            } 
            );
            

    });


})(jQuery);