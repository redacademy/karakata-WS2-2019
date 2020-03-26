(function($) {
  $('.service-icon').click(function() {
    // $(`.service-info-box[data-section=' ${selected} ']`).addClass('hidden');
    $(this).addClass('active');
    // const selected = $(this).data('section');
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
    $('.service-icon').removeClass('triggered-c');
    $('.service-info-box').addClass('hidden');
    $('.class-card-container').html('');
    $('.about-content').removeClass('trigger-sp1');
    $('.services-provided').removeClass('trigger-sp2');
  });

  let classesPull = function(val, card) {
    // used to generate the classes pages ticket content based in which category is selected
    if ($(card).hasClass('triggered-c') === false) {
      $(card).addClass('triggered-c');
      $('.about-content').addClass('trigger-sp1');
      $('.services-provided').addClass('trigger-sp2');

      $.ajax({
        method: 'GET',
        url: functionVars.karakata_url + 'acf/v3/services_post_type',
        async: false,
        success: function(data) {
          data.forEach(song => {
            if (song.acf.category === val) {
              $('.class-card-container')
                .append(`<div class="service-info-box music-test" data-section="music">\
                <div class = "event-information-wrap">\
                    <p class = "event-title-tab">${song.acf.title_upper}</p>\
                    <div class = "event-address-tab"><div class = "class-address"><img src = "${functionVars.karakata_template_path}/Icons/Location.png"></div><p>${song.acf.address}</p></div>\
                    <p class = "event-ticket-tab"><span class = "class-price"></span>${song.acf.ticket_price}</p>\
                    <p class = "event-text-tab">${song.acf.text}</p>\
                    <div class = "event-information-btn">\
                        <a class = "link-more-information" href = "${functionVars.karakata_home_url}/contact" blank = "">Find out</a>\
                        <i class="fas fa-angle-double-right"></i>\
                    </div>\
                </div>\
            </div>`);
            }
            ('/Icons/Location.png');
          });
        },
        complete: function() {},

        beforeSend: function(xhr) {
          xhr.setRequestHeader('X-WP-Nonce', functionVars.karakata_nonce);
        }
      });
    }
  };

  $('.music-service').on('click', function() {
    $('.music-test').removeClass('hidden');
    classesPull(
      $(this)
        .find($('.section-tag'))
        .html(),
      this
    );
  });

  $('.drums-service').on('click', function() {
    $('.drums-test').removeClass('hidden');
    classesPull(
      $(this)
        .find($('.section-tag'))
        .html(),
      this
    );
  });

  $('.yoga-service').on('click', function() {
    $('.yoga-test').removeClass('hidden');
    classesPull(
      $(this)
        .find($('.section-tag'))
        .html(),
      this
    );
  });
  $('.meditation-service').on('click', function() {
    $('.meditation-test').removeClass('hidden');
    classesPull(
      $(this)
        .find($('.section-tag'))
        .html(),
      this
    );
  });

  $('.cook-service').on('click', function() {
    $('.cook-test').removeClass('hidden');
    classesPull(
      $(this)
        .find($('.section-tag'))
        .html(),
      this
    );
  });

  $('.contact-service').on('click', function() {
    $('.contact-test').removeClass('hidden');
    classesPull(
      $(this)
        .find($('.section-tag'))
        .html(),
      this
    );
  });

  // come back to this to make the correct box infomation to go with correct tab
})(jQuery);
