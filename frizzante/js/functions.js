jQuery(document).ready(function($) {
	var $window = $(window);
	var nav = $('#nav-social');
	$window.scroll(function(){
	    if ($window.scrollTop() >= 300) {
	       nav.addClass('nav-fixed');
	    }
	    else {
	       nav.removeClass('nav-fixed');
	    }
	});
});

jQuery(document).ready(function ($) {
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 90 // - 90px (nav-height)
        }, 900, 'swing', function () {
            window.location.hash = '1' + target;
        });
    });
});