jQuery( document ).ready(function($) {
    
    // Smooth scroll #links
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 600);
        
        if ($( this ).hasClass('scroll-arrow')) {
            $(this).fadeOut();
        }
        
    });
    
    // Fade hero contents on scroll
    var heroContent = $('#home-hero #home-hero__content'),
        limit = $(window).outerHeight() * .75;
    
    $(window).on('scroll', function() {
        var st = $(this).scrollTop();
    
        /* avoid unnecessary call to jQuery function */
        if (st <= limit) {
            heroContent.css({ 'opacity' : (1 - st/limit) });
            $('.scroll-arrow').css({ 'opacity' : (1 - st/limit) });
        }
        
        // Display or hide scroll up arrow
        if (st <= 500) {
            $("#scroll-top__arrow").removeClass("active");
        } else {
            $("#scroll-top__arrow").addClass("active");
        }
        
    });
    
    // Hamburger toggle
    $('#hamburger-toggle').on('click', function() {
        $( this ).toggleClass('is-active');
        $('#hamburger-menu').toggleClass('is-active');
        $('.site-title').toggleClass('is-active');
        
        if ( $('#hamburger-menu').hasClass('is-active') ) {
            var itemIndex = 0;
            $('#hamburger-menu li a').each(function() {
                
                var delay = 150;
                var time = (delay * itemIndex) + delay;
                let menuItemTemp = $( this );
        
                setTimeout(function () {
                    $( menuItemTemp ).addClass('is-active');
                }, time);
                
                itemIndex++;
    
            });
        } else {
            
            $('#hamburger-menu li a').each(function() {
                $(this).removeClass('is-active');
            });
            
        }
        
    });
    
    // Remove cover
    $("body #page").addClass("loaded");
    
});