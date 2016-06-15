$(document).ready(function () {
    //$('.globoProd').hide();
});

$(function () {
    $('.prodImg').hover(function () {
        $('.globoProd').toggle();
    });
    $('.globoProd').hover(function () {
        $('.globoProd').show();
    }, function () {
        $('.globoProd').hide();
    });
});