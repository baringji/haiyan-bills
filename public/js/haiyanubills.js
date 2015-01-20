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

            $('.navbar-default').css('background-color', 'rgba(34, 34, 34, 0.4)');

            if (varOffset.url != 'header') {
                $('.navbar-default').css('background-color', 'rgba(34, 34, 34, 1)');
            }

            jQuery('html, body').animate({
                scrollTop: jQuery('#' + varOffset.url).offset().top - 130
            }, 1000);
        });

    });
});