$(function() {
    $('ul.nav a').bind('click',function(event){
        event.preventDefault();
        var $anchor = $(this);
        console.log($anchor.attr('href'));
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 500);
        event.preventDefault();
    });
});