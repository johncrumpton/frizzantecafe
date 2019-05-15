// ----------------------------------------------------------------------------------------------------
// jQuery for scrolling and adjusting the 'landing' position with the nav height
// ----------------------------------------------------------------------------------------------------

	$(document).ready(function () {
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 145 // - 145px (nav-height)
        }, 900, 'swing', function () {
            window.location.hash = '1' + target;
        });
    });
});