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
    
    // Remove page cover on full load
    $(window).load(function(){
        $("body #page").addClass("loaded");
    });
    
    // Fade hero contents on scroll
    var heroContent = $('#home-hero #home-hero__content'),
        limit = $(window).outerHeight() * .75;
    
    $(window).on('scroll', function() {
        var st = $(this).scrollTop();
    
        /* avoid unnecessary call to jQuery function */
        if (st <= limit) {
            heroContent.css({ 'opacity' : (1 - st/limit) });
        }
        
    });
    
});