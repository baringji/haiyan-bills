jQuery(function($) {
    $(document).ready(function() {

        $('.flexslider').flexslider({
            controlNav: false,
            directionNav: false,
            slideshowSpeed: 7000,
            animationSpeed: 3000
        });

        jQuery('.navigate-to').click(function() {
            var varOffset =  $(this).data();

            jQuery('html, body').animate({
                scrollTop: jQuery('#' + varOffset.url).offset().top - 20
            }, 1000);
        });

    });
});