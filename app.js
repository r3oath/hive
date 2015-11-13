$(function() {
    var landing = $('#landing');
    var landing_body = $('#landing_body');

    var resize_landing = function() {
        landing.height(window.innerHeight);
        body_height = landing_body.height();
        landing_height = landing.height();

        console.log(body_height);
        console.log(landing_height);

        var top = (landing_height / 2) - (body_height / 2) - 50;

        landing_body.css({
            'padding-top': top + 'px',
        });
    };

    resize_landing();

    $(window).on('resize', function() {
        resize_landing();
    });
});