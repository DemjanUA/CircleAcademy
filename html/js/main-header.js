$('.has-dropdown-menu > a').click(function(){
    if ($(this).parent().hasClass('open') !== true){
        $(this).parent().addClass('open');
    } else {
        $(this).parent().removeClass('open');
    }
    return false;
    });

    $('.has-dropdown-menu').mouseleave(function(){
        $('.open').removeClass('open');
    });