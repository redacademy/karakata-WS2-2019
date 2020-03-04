
(function ($) {


    $('.service-icon').click(function () {
        $(this).addClass('active');
        $('.service-icon').not('.active').hide();
        const selected = $(this).data('section');
        $('.back-button').show();




        $(`.service-info-box[data-section=' ${selected} ']`).show();
        // $('.service-info-box[data-section="' + selected + '"]').show();
    });
    $('.back-button').hide();


    $('.back-button').click(function () {
        $('.service-icon').removeClass('active');
        $('.back-button').hide();
        $('.service-icon').show();
    })



})(jQuery);