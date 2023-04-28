(function($) {
    $(document).ready(function() {
        $('.navbar-toggler.hamburger').on('click', function() {
            $(this).toggleClass('is-active');
        })

        // For AOS to work, it needs to be enabled in functions.php!
        if(typeof AOS !== 'undefined') {
            AOS.init({
                startEvent: 'load',
                once: false,
                duration: 1000
            });

            // Fix issue with blank sections
            setTimeout(function() {
                AOS.refresh();
            }, 100);
        }
    })
})(jQuery);