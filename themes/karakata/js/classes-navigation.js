(function($) {
  $('.service-icon').click(function() {
    $(`.service-info-box[data-section=' ${selected} ']`).addClass('hidden');
    $(this).addClass('active');
    const selected = $(this).data('section');
    $('.service-icon')
      .not('.active')
      .hide();
    $('.back-button').show();
    $('.services-provided').addClass('service-icon-desktop');
  });

  $('.back-button').hide();
  $('.back-button').click(function() {
    $('.service-icon').removeClass('active');
    $('.back-button').hide();
    $('.services-provided').removeClass('service-icon-desktop');

    $('.service-icon').show();
    $('.service-info-box').addClass('hidden');
  });

  $('.music-service').on('click', function() {
    $('.music-test').removeClass('hidden');
  });

  $('.drums-service').on('click', function() {
    $('.drums-test').removeClass('hidden');
  });

  $('.yoga-service').on('click', function() {
    $('.yoga-test').removeClass('hidden');
  });
  $('.meditation-service').on('click', function() {
    $('.meditation-test').removeClass('hidden');
  });

  $('.cook-service').on('click', function() {
    $('.cook-test').removeClass('hidden');
  });

  $('.contact-service').on('click', function() {
    $('.contact-test').removeClass('hidden');
  });

  // come back to this to make the correct box infomation to go with correct tab
})(jQuery);
