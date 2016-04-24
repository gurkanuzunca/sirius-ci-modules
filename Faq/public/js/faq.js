$('.faqs .faq .question').on('click', function(){
    var parent = $(this).parent();

    if (! parent.hasClass('active')){
        $('.faqs .faq').removeClass('active');
        parent.addClass('active');

        $('.faqs .faq .answer').animate({opacity: 'hide', height: 'hide'});
        $(this).next().animate({opacity: 'show', height: 'show'});
    } else {
        parent.removeClass('active').children('.answer').animate({opacity: 'hide', height: 'hide'});
    }
});