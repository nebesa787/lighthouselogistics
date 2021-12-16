$(document).ready(function() {
    $.mask.definitions['~']='[+-]';
    $("input[type='tel']").mask("+38(999)999-99-99");

    //убераем плесхолдер при клике
    $('.wpcf7-form input,.wpcf7-form textarea,input#s,input').each(function(){
        var placeH = $(this).attr('placeholder');
        $(this).focus(function () {
            $(this).removeAttr('placeholder');
        });
        $(this).focusout(function(){
            $(this).attr('placeholder',placeH);
        });
    });
    $('#nav > .btn').click(function(){
        $('#callback-form form').removeClass('sent');
        $('#callback-form .wpcf7-mail-sent-ok').hide();

    });
    $('.specification > .btn').click(function(){
        $('#order-form form').removeClass('sent');
        $('#order-form .wpcf7-mail-sent-ok').hide();

    });
    $('.price-message > .btn').click(function(){
        $('#price-reduction form').removeClass('sent');
        $('#price-reduction .wpcf7-mail-sent-ok').hide();
    })
});