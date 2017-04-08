$(function() {
    $('.nav li').hover(function () {
        $('.nav li').removeClass('active');
        $(this).addClass('active');
    }, function () {
        $(this).removeClass('active');
    });
});