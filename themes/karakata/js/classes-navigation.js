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
    $('.event-title-tab').text();
    $('.event-address-tab').text();
    $('.event-ticket-tab').text();
    $('.event-text-tab').text();
  });

  let classesPull = function (val) {

    $.ajax({
        method: 'GET',
        url: functionVars.karakata_url + 'acf/v3/services_post_type' ,
        success: function (data) {

            data.forEach((song) => {
              if(song.acf.category === val) {
                $('.event-title-tab').text(song.acf.title_upper);
                $('.event-address-tab').text(song.acf.address);
                $('.event-ticket-tab').text(song.acf.ticket_price);
                $('.event-text-tab').text(song.acf.text);
              }
            })  
        },
        complete: function() {
        },

        beforeSend: function(xhr) {
            xhr.setRequestHeader('X-WP-Nonce', functionVars.karakata_nonce);
            }
    });
};

  $('.music-service').on('click', function() {
    $('.music-test').removeClass('hidden');
    classesPull($(this).find($('.section-tag')).html());
  });

  $('.drums-service').on('click', function() {
    $('.drums-test').removeClass('hidden');
    classesPull($(this).find($('.section-tag')).html());
  });

  $('.yoga-service').on('click', function() {
    $('.yoga-test').removeClass('hidden');
        classesPull($(this).find($('.section-tag')).html());
  });
  $('.meditation-service').on('click', function() {
    $('.meditation-test').removeClass('hidden');
        classesPull($(this).find($('.section-tag')).html());
  });

  $('.cook-service').on('click', function() {
    $('.cook-test').removeClass('hidden');
        classesPull($(this).find($('.section-tag')).html());
  });

  $('.contact-service').on('click', function() {
    $('.contact-test').removeClass('hidden');
        classesPull($(this).find($('.section-tag')).html());
  });

  // come back to this to make the correct box infomation to go with correct tab
})(jQuery);
