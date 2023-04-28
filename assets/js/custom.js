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

var animateButton = function(e) {
  e.preventDefault;
  //reset animation
  e.target.classList.remove('animate');
  
  e.target.classList.add('animate');
  setTimeout(function(){
    e.target.classList.remove('animate');
  },700);
};
var classname = document.getElementsByClassName("bubbly-button");
for (var i = 0; i < classname.length; i++) {
  classname[i].addEventListener('click', animateButton, false);
  
}