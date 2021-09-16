jQuery( document ).ready(function($) {
    
    // Smooth scroll #links
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        console.log(123);

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 1000);
    });
    
});