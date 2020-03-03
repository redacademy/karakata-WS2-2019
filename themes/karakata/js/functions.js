(function($) {


    $('.testplay').on('click', function() {
        $('#audioPlayer')[0].play();
    });
    $('.teststop').on('click', function() {
        $('#audioPlayer')[0].pause();
    });

})(jQuery);