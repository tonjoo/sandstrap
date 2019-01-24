(function ($) {
    headerScroll();

    $('.js-target-scroll > a').click(function(e) {
        var direction = $(this).attr('href');
        var heightHeader = $('#main-header.header-fixed').length ? $('#main-header.header-fixed').innerHeight() + 30 : 30;

        $('.js-target-scroll').removeClass('active');
        $(this).parent().addClass('active');

        if(direction == '#top') {
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
        } else {
            $('html, body').animate({
                scrollTop: $(direction).offset().top - heightHeader
            }, 1000);
        }

        e.preventDefault();
    });

    $(window).scroll( function() {
        headerScroll();
    });

    var sidebarOffset = $('.sidebar').length ? $('.sidebar').offset().top : null;

    function headerScroll(event) {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > sidebarOffset) {
            $('.sidebar').addClass('sidebar--scrolled');
        } else {
            $('.sidebar').removeClass('sidebar--scrolled');
        }
    }
}(jQuery));