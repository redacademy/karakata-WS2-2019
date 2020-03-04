
(function ($) {


    $('.service-icon').click(function () {
        $(this).addClass('active');
        $('.service-icon').not('.active').hide();
        const selected = $(this).data('section');


        $('.service-info-box[data-section="' + selected + '"]').show();
    });




})(jQuery);